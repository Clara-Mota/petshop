<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profissional;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index() {

        $professionals = Profissional::all();

        return view('welcome',['professionals' => $professionals]);

    }

    public function cadastroprofissional(){
            return view('cadastros.cadastroprofissional');

    }

    public function cadastropet() {
        return view('cadastros.cadastropet');

    }

    public function agendamento() {
        return view('cadastros.agendamento');

    }

    public function store(Request $request){

        $profissional = new Profissional;

        $profissional->nome = $request->nome;
        $profissional->especializacao = $request->especializacao;
        $profissional->cpf_profissional = $request->cpf_profissional;
        $profissional->email = $request->email;
        $profissional->password = $request->password;


        $profissional->save();

        return redirect('/cadastros/cadastroprofissional');

    }

    /*public function auth(Request $request){

        if (Auth::attempt(['email'=> $request->$email , 'password'=> $request->$password])){
            $request->session()->regenerate();
            return redirect('/menu');
        }else{
            return redirect()->back()->with('erro','Usuário ou senha inválido!');
        }

    }*/

}
