<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladorController extends Controller
{
    public function index(){
    	return view('simulador/index');
    }

}
