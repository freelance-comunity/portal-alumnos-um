@extends('backLayout.app')
@section('title-dashboard')
Editar Usuario
@stop

@section('content')

    <h1>Editar Usuario</h1>
    <hr/>

    {!! Form::model($user, [
        'method' => 'PATCH',
        'url' => ['user/users', $user->id],
        'class' => 'form-horizontal'
    ]) !!}


    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('name', '
        <p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
      {!! Form::label('last_name', 'Apellido Paterno: ', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('last_name', '
        <p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('second_lastname') ? 'has-error' : ''}}">
      {!! Form::label('second_lastname', 'Apellido Materno: ', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('second_lastname', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('second_lastname', '
        <p class="help-block">:message</p>') !!}
      </div>
    </div>

    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
      {!! Form::label('username', 'Nombre de Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('username', '
        <p class="help-block">:message</p>') !!}
      </div>
    </div>

    {{-- <div class="form-group {{ $errors->has('user_type') ? 'has-error' : ''}}">
      {!! Form::label('user_type', 'Tipo de Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::select('user_type', $roles ,null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('user_type', '
        <p class="help-block">:message</p>') !!}
      </div>
    </div> --}}

    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
      {!! Form::label('email', 'Correo Electrónico: ', ['class' => 'col-sm-3 control-label']) !!}
      <div class="col-sm-6">
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('email', '
        <p class="help-block">:message</p>') !!}
      </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualizar', ['class' => 'btn btn-info btn-raised pull-right btn-lg form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
