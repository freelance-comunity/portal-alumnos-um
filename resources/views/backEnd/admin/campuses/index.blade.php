@extends('backLayout.app')
@section('title-dashboard')
Lista de Campus
@stop

@section('content')

    <h1>Campus <a href="{{ url('admin/campuses/create') }}" class="btn btn-info btn-raised pull-right btn-lg">Agregar Nuevo Campus</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="campuses">
            <thead>
                <tr>
                    <th>ID</th><th>Campus Id</th><th>Nombre</th><th>Nombre Corporativo</th><th>Detalle</th>
                </tr>
            </thead>
            <tbody>
            @foreach($campuses as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/campuses', $item->id) }}">{{ $item->campus_id }}</a></td><td>{{ $item->name }}</td><td>{{ $item->corporate_name }}</td>
                    <td>
                        <a href="{{ url('admin/campuses/' . $item->id . '/edit') }}" class="btn btn-info btn-raised btn-sm">Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/campuses', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-raised btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#campuses').DataTable({
            @include('partials.table-spanish')
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection
