@extends('backLayout.app')
@section('title')
Usuarios
@stop
@section('title-dashboard')
Lista de Usuarios
@endsection
@section('content')
    <h1>Usuarios <a href="{{ url('user/users/create') }}" class="btn btn-info btn-raised pull-right btn-lg">Agregar Nuevo Usuario</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="users">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Detalle</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('user/users', $item->id) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->second_lastname }}</td>
                    <td>
                        <a href="{{ url('user/users/' . $item->id . '/edit') }}" class="btn btn-info btn-raised btn-sm"> Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['user/users', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-raised btn-sm']) !!}
                        {!! Form::close() !!}
                        <a href="#" class="btn btn-raised btn-default btn-sm"> Roles</a>
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
        $('#users').DataTable({
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
