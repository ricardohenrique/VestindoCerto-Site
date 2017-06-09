<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;

class ApresentacaoController extends Controller
{
    public function index(){
    	return view('apresentacao/index');
    }
}
