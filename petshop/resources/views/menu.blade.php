@extends('layouts.main')

@section('title', 'Menu')

@section('content')


    <div class="col-md-12 btn btn1" >
        <a href="/cadastros/cadastropet"><button type="button" class="btn btn-primary" id="btn_menu1">Cadastro Pet/Tutor</button></a>
    </div>
    <div class="col-md-12 btn">
        <a href="/agenda"><button type="button" class="btn btn-primary" id="btn_menu2">Agenda</button></a>
    </div>
    <div class="col-md-12 btn">
        <a href="/cadastros/cadastroprofissional"><button type="button" class="btn btn-primary" id="btn_menu1">Cadastro Profissional</button></a>
    </div>
    <div class="col-md-12 btn">
        <a href="#"><button type="button" class="btn btn-primary" id="btn_menu2">Página Pet</button></a>
    </div>
    <div class="col-md-12 btn">
        <a href="#"><button type="button" class="btn btn-primary" id="btn_menu1">Página Profissional</button></a>
    </div>


@endsection