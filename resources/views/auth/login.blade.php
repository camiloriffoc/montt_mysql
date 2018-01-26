@extends('layouts.app')
@section('content')
<div class="content hold-transition login-page">
  <div class="login-logo">
    <b>MONTT GROUP</b>
</div>
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
         <p class="login-box-msg">Iniciar sesion</p>
      </div>
      <div class="panel-body"> 
        <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email</label>
            <input class="form-control"
              type="email"
              name="email"
              value="{{ old('email') }}" 
              placeholder="Ingresa tu email.">
              {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
              <span class="fa fa-user-o fa-lg form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password">Clave</label>
            <input class="form-control"
              type="password"
              name="password"
              placeholder="Ingresa tu clave.">
              {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
              <span class="fa fa-lock fa-lg form-control-feedback"></span>
          </div>
          <button class="btn btn-primary btn-block">Acceder</button>
        </form>

      </div>
    </div>
  </div>

</div>

@endsection
