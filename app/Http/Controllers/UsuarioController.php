<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginView()
    {
      return view('login');
    }
   
    public function homeView()
    {
      return view('home');
    }
    public function cadastroView()
    {
      return view('cadastro');
    }
    public function inflivroView()
    {
      return view('inflivro');
    }
    public function meuslivrosView()
    {
      return view('meuslivros');
    }
    public function minhacontaView()
    {
      return view('minhaconta');
    }
    public function resultadoslivrosView()
    {
      return view('resultadoslivros');
    }

}
