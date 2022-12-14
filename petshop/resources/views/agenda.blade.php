@extends('layouts.main')

@section('title', 'Agendar')

@section('content')

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/menu">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/cadastros/cadastropet">Cadastro Pet</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/cadastros/cadastroprofissional">Cadastro Profissional</a>
  </li>
</ul>
<a href="/cadastros/agendamento"><button type="button" class="btn btn-primary" id="btn_agendamento">Agendar serviço</button></a>

@endsection