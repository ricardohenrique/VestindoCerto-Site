<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LookController extends Controller
{
    public function index(){
    	return view('usuario.gerar-look');
    }

    public function newLook(Request $request){
        dd($request->all());
    }
}
