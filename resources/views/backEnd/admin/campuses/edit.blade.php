@extends('backLayout.app')
@section('title-dashboard')
Editar Campus
@stop

@section('content')

    <h1>Editar Campus</h1>
    <hr/>

    {!! Form::model($campus, [
        'method' => 'PATCH',
        'url' => ['admin/campuses', $campus->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('campus_id') ? 'has-error' : ''}}">
                {!! Form::label('campus_id', 'Campus Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('campus_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('campus_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('corporate_name') ? 'has-error' : ''}}">
                {!! Form::label('corporate_name', 'Nombre Corporativo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('corporate_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('corporate_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rfc') ? 'has-error' : ''}}">
                {!! Form::label('rfc', 'RFC: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('rfc', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('rfc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                {!! Form::label('address', 'Dirección: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('number_outside') ? 'has-error' : ''}}">
                {!! Form::label('number_outside', 'Número Exterior: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('number_outside', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('number_outside', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('number_inside') ? 'has-error' : ''}}">
                {!! Form::label('number_inside', 'Número Interior: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('number_inside', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('number_inside', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('reference') ? 'has-error' : ''}}">
                {!! Form::label('reference', 'Referencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('reference', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('reference', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('postal_code') ? 'has-error' : ''}}">
                {!! Form::label('postal_code', 'Código Postal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('postal_code', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('postal_code', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('colony') ? 'has-error' : ''}}">
                {!! Form::label('colony', 'Colonia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('colony', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('colony', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('federal_entity') ? 'has-error' : ''}}">
                {!! Form::label('federal_entity', 'Entidad Federal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('federal_entity', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('federal_entity', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                {!! Form::label('country', 'País: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('campus_key') ? 'has-error' : ''}}">
                {!! Form::label('campus_key', 'Código de Campus : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('campus_key', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('campus_key', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Estatus: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                  {!! Form::select('status', ['1'=>'ACTIVO','2'=>'INACTIVO'],null, ['class' => 'form-control', 'required' => 'required']) !!}
                  {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
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
