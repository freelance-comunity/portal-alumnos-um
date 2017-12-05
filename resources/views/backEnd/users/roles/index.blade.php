@extends('backLayout.app')
@section('title')
Role
@stop
@section('title-dashboard')
Lista de Roles
@endsection
@section('content')
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
    <h1>Roles <a href="{{ url('user/roles/create') }}" class="btn btn-info btn-raised pull-right btn-lg">Agregar Nuevo Rol</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="roles">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Nombre Secundario</th><th>Detalles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($roles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('user/roles', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->guard_name }}</td>
                    <td>
                        <a href="{{ url('user/roles/' . $item->id . '/edit') }}" class="btn btn-info btn-raised btn-sm">Actualizar</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['user/roles', $item->id],
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
        $('#roles').DataTable({
          "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página.",
            "zeroRecords": "Lo sentimos. No se encontraron registros.",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros aún.",
            "infoFiltered": "(filtrados de un total de _MAX_ registros)",
            "search": "Búsqueda",
            "LoadingRecords": "Cargando ...",
            "Processing": "Procesando...",
            "SearchPlaceholder": "Comience a teclear...",
            "paginate": {
              "previous": "Anterior",
              "next": "Siguiente",
            }
          },
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
