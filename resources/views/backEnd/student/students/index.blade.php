@extends('backLayout.app')
@section('title-dashboard')
  Estudiantes
@stop

@section('content')

    <h1>Estudiantes <a href="{{ url('student/students/create') }}" class="btn btn-info btn-raised pull-right btn-lg">Agregar Nuevo Estudiante</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="students">
            <thead>
                <tr>
                    <th>ID</th><th>Matricula</th><th>Nombre</th><th>Apellido Paterno</th><th>Detalle</th>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('student/students', $item->id) }}">{{ $item->student_id }}</a></td><td>{{ $item->name }}</td><td>{{ $item->last_name }}</td>
                    <td>
                        <a href="{{ url('student/students/' . $item->id . '/edit') }}" class="btn btn-info btn-raised btn-sm">Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['student/students', $item->id],
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
        $('#students').DataTable({
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
