@extends('backLayout.app')
@section('title-dashboard')
Crear nuevo Estudiante
@stop

@section('content')

    <h1>Crear Nuevo Estudiante</h1>
    <hr/>

    {!! Form::open(['url' => 'student/students', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
                {!! Form::label('student_id', 'Matricula: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('student_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('student_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                {!! Form::label('last_name', 'Apellido Paterno: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('second_lastname') ? 'has-error' : ''}}">
                {!! Form::label('second_lastname', 'Apellido Materno: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('second_lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('second_lastname', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                {!! Form::label('gender', 'Genero: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('gender', ['HOMBRE'=>'HOMBRE', 'MUJER'=>'MUJER'],null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : ''}}">
                {!! Form::label('birthdate', 'Fecha de Nacimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('birthdate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('birthdate', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('state_birth') ? 'has-error' : ''}}">
                {!! Form::label('state_birth', 'Estado de Nacimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('state_birth', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('state_birth', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('town_birth') ? 'has-error' : ''}}">
                {!! Form::label('town_birth', 'Ciudad de Nacimiento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('town_birth', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('town_birth', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                {!! Form::label('phone', 'Teléfono: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cell_phone') ? 'has-error' : ''}}">
                {!! Form::label('cell_phone', 'Teléfono Celular: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cell_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('cell_phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                {!! Form::label('state', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('state', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('town') ? 'has-error' : ''}}">
                {!! Form::label('town', 'Ciudad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('town', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('town', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                {!! Form::label('country', 'País: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
                {!! Form::label('street', 'Calle: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('street', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('house_number') ? 'has-error' : ''}}">
                {!! Form::label('house_number', 'Número de Casa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('house_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('house_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('colony') ? 'has-error' : ''}}">
                {!! Form::label('colony', 'Colonia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('colony', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('colony', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('post_code') ? 'has-error' : ''}}">
                {!! Form::label('post_code', 'Código Postal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('post_code', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('post_code', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Correo Electrónico: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tutor_name') ? 'has-error' : ''}}">
                {!! Form::label('tutor_name', 'Nombre del Tutor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tutor_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tutor_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tutor_phone') ? 'has-error' : ''}}">
                {!! Form::label('tutor_phone', 'Teléfono del Tutor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tutor_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tutor_phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Estatus: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('status', ['1'=>'ALTA','2'=>'BAJA'],null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('curp') ? 'has-error' : ''}}">
                {!! Form::label('curp', 'CURP: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('curp', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('curp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sep') ? 'has-error' : ''}}">
                {!! Form::label('sep', 'SEP ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sep', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('sep', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('languages') ? 'has-error' : ''}}">
                {!! Form::label('languages', 'Lenguajes que habla: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('languages', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('languages', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('campus_id') ? 'has-error' : ''}}">
                {!! Form::label('campus_id', 'Lenguajes que habla: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('campus_id', $campuses,null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('campus_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Crear', ['class' => 'btn btn-info btn-raised pull-right btn-lg form-control']) !!}
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
