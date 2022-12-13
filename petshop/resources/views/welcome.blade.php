@extends('layouts.main')

@section('title', 'Pet Shop')

@section('content')
<div class="row">
  <div class="col-md-6" id="logo">
      <img src="/img/logo_inicio.png">
    </div>
    <div class="col-md-6" id="form">
      <form action="" id="form_inicio">
        <div id="login_senha" class=col-md-12>
          <label for="senha-login1" class="form-label">Insira seu CPF</label>
          <input type="password" class="form-control" id="cpf-login1">
        </div>
          </br>
        <button type="submit" class="btn btn-primary" id="btn_login">Entrar</button>
      </form>
    </div>
</div>
@endsection