@extends('backLayout.app')
@section('title')
User
@stop

@section('content')

    <h1>Detalle de Usuario</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nombre de Usuario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td><td> {{ $user->name }}</td><td> {{ $user->last_name }} </td><td>{{$user->second_lastname}}</td><td>{{$user->username}}</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
