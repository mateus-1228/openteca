<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function adminView()
    {
        return view('admin');
    }

    public function homeView()
    {
        return view('home');
    }

    public function cadastroView()
    {
        return view('cadastro');
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

    public function inflivrosView()
    {
        return view('inflivros');
    }

    // Nova rota criada no web.php
    public function fazerLogin(Request $request)
    {
        //pega as informaçoes do formulario
        $form = $request->all();

        // mostra as informaçoes do formulario
        dd($form);
    }
 }  