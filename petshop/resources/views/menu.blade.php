@extends('layouts.main')

@section('title', 'Menu')

@section('content')

<div class="row g-5">
    <div class="col-md-12" >
        <a href="/cadastros/cadastropet"><button type="button" class="btn btn-primary" id="btn_menu1">Cadastro Pet/Tutor</button></a>
    </div>
    <div class="col-md-12">
        <a href="/cadastros/cadastroprofissional"><button type="button" class="btn btn-primary" id="btn_menu2">Cadastro Profissional</button></a>
    </div>
    <div class="col-md-12">
        <a href="/agenda"><button type="button" class="btn btn-primary" id="btn_menu1">Agenda</button></a>
    </div>
    <div class="col-md-12">
        <a href="#"><button type="button" class="btn btn-primary" id="btn_menu2">Página Pet</button></a>
    </div>
    <div class="col-md-12">
        <a href="#"><button type="button" class="btn btn-primary" id="btn_menu1">Página Profissional</button></a>
    </div>
</div>

@endsection