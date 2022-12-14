@extends('layouts.main')

@section('title', 'Pet Shop')

@section('content')
<div class="row">
  <div class="col-md-6" id="logo">
      <img src="/img/logo_inicio.png">
    </div>
    <div class="col-md-6" id="form">
      <form action="" method="POST" id="form_inicio">
      @csrf
      <div id="login_email" class=col-md-12>
          <label for="email-login1" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div id="login_senha" class=col-md-12>
          <label for="senha-login1" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
          </br>
        <button type="submit" class="btn btn-primary" id="btn_login">Entrar</button>
      </form>
    </div>
</div>
@endsection