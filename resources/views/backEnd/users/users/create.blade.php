@extends('backLayout.app') @section('title-dashboard') Crear nuevo Usuario @stop @section('content')

<h1>Crear Nuevo Usuario</h1>
<hr/>
@if ($errors->any())
<ul class="alert alert-danger">
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif
{!! Form::open(['url' => 'user/users', 'class' => 'form-horizontal']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label label-floating label-floating']) !!}
  <div class="col-sm-6">
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('name', '
    <p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
  {!! Form::label('last_name', 'Apellido Paterno: ', ['class' => 'col-sm-3 control-label label-floating']) !!}
  <div class="col-sm-6">
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('last_name', '
    <p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('second_lastname') ? 'has-error' : ''}}">
  {!! Form::label('second_lastname', 'Apellido Materno: ', ['class' => 'col-sm-3 control-label label-floating']) !!}
  <div class="col-sm-6">
    {!! Form::text('second_lastname', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('second_lastname', '
    <p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
  {!! Form::label('username', 'Nombre de Usuario: ', ['class' => 'col-sm-3 control-label label-floating']) !!}
  <div class="col-sm-6">
    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('username', '
    <p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('user_type') ? 'has-error' : ''}}">
  {!! Form::label('user_type', 'Tipo de Usuario: ', ['class' => 'col-sm-3 control-label label-floating']) !!}
  <div class="col-sm-6">
    {!! Form::select('user_type', ['1'=>'SUPER ADMINISTRADOR', '2'=>'ADMINISTRADOR', '3'=>'CONTROL ESCOLAR'] ,null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('user_type', '
    <p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('email', 'Correo Electrónico: ', ['class' => 'col-sm-3 control-label label-floating']) !!}
  <div class="col-md-6">
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!} {!! $errors->first('email', '
    <p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-sm-3 control-label label-floating">Contraseña</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-sm-3 control-label label-floating">Confirmar Contraseña</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>


<div class="form-group">
  <div class="col-sm-offset-3 col-sm-3">
    {!! Form::submit('Crear', ['class' => 'btn btn-info btn-raised pull-right btn-lg form-control']) !!}
  </div>
</div>
{!! Form::close() !!}
@endsection
