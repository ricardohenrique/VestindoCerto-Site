<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;

class ComoFuncionaController extends Controller
{
    public function index(){
    	return view('como-funciona/index');
    }
}
