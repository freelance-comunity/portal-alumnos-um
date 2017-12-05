@extends('layouts.master-login')

@section('content')
  <form method="POST" action="{{ route('login') }}" class="full-box logInForm">
      {{ csrf_field() }}
		<p class="text-center text-muted"><!--<i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>--><img src="{{asset('/images/logo_um_blanco.png')}}" style="border-radius: 50%; width:150px;"></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
		  <label class="control-label" for="UserEmail">E-mail</label>
		  <input class="form-control" id="UserEmail" type="email" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
		</div>
		<div class="form-group label-floating{{ $errors->has('password') ? ' has-error' : '' }}">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" id="UserPass" type="password" name="password" required>
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
	</form>
@endsection
