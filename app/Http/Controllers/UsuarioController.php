<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('usuario.index');
    }

    public function perfil(){
    	return view('usuario.perfil');
    }

    public function gerarLook(){
    	return view('usuario.gerarLook');
    }

    public function roupas(){
    	return view('usuario.roupas');
    }
}
