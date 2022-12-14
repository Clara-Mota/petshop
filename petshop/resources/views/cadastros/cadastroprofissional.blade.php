@extends('layouts.main')

@section('title', 'Cadastro Profissional')

@section('content')

<header id=hd-cadastroprofissional><h1>Cadastro Profissional</h1></header>

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/menu">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/cadastros/cadastropet">Cadastro Pet</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/agenda">Agenda</a>
  </li>
</ul>

<div id="profissional-creat-container" class="col-md-6 offset-md-3">
    <form action="/cadastros" method="POST">
        @csrf
        <div class="form-group">
            <br/>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="especializacao" id="especializacao" placeholder="Especialização" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="cpf_profissional" id="cpf_profissional" placeholder="CPF" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="password" id="password" placeholder="Crie uma senha" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

@endsection