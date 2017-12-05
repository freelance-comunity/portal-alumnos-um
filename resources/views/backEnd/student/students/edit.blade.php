@extends('backLayout.app')
@section('title')
Edit Student
@stop

@section('content')

    <h1>Edit Student</h1>
    <hr/>

    {!! Form::model($student, [
        'method' => 'PATCH',
        'url' => ['student/students', $student->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
                {!! Form::label('student_id', 'Student Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('student_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('student_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                {!! Form::label('last_name', 'Last Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('second_lastname') ? 'has-error' : ''}}">
                {!! Form::label('second_lastname', 'Second Lastname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('second_lastname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('second_lastname', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
                {!! Form::label('gender', 'Gender: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('gender', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : ''}}">
                {!! Form::label('birthdate', 'Birthdate: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('birthdate', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('birthdate', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('state_birth') ? 'has-error' : ''}}">
                {!! Form::label('state_birth', 'State Birth: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('state_birth', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('state_birth', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('town_birth') ? 'has-error' : ''}}">
                {!! Form::label('town_birth', 'Town Birth: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('town_birth', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('town_birth', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                {!! Form::label('phone', 'Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cell_phone') ? 'has-error' : ''}}">
                {!! Form::label('cell_phone', 'Cell Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cell_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('cell_phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
                {!! Form::label('state', 'State: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('state', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('town') ? 'has-error' : ''}}">
                {!! Form::label('town', 'Town: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('town', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('town', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
                {!! Form::label('country', 'Country: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
                {!! Form::label('street', 'Street: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('street', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('house_number') ? 'has-error' : ''}}">
                {!! Form::label('house_number', 'House Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('house_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('house_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('colony') ? 'has-error' : ''}}">
                {!! Form::label('colony', 'Colony: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('colony', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('colony', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('post_code') ? 'has-error' : ''}}">
                {!! Form::label('post_code', 'Post Code: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('post_code', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('post_code', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tutor_name') ? 'has-error' : ''}}">
                {!! Form::label('tutor_name', 'Tutor Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tutor_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tutor_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tutor_phone') ? 'has-error' : ''}}">
                {!! Form::label('tutor_phone', 'Tutor Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tutor_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tutor_phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('status', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('curp') ? 'has-error' : ''}}">
                {!! Form::label('curp', 'Curp: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('curp', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('curp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sep') ? 'has-error' : ''}}">
                {!! Form::label('sep', 'Sep: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sep', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('sep', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('languages') ? 'has-error' : ''}}">
                {!! Form::label('languages', 'Languages: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('languages', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('languages', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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