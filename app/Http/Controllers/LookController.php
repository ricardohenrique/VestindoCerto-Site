<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;
use VestindoCerto\Place;
use VestindoCerto\Event;
use Auth;

class LookController extends Controller
{
    public function index(){
        $place = new Place();
        $event = new Event();
        $data['places'] = $place->all()->toArray();
        $data['events'] = $event->all()->toArray();

    	return view('usuario.gerar-look', $data);
    }

    public function newLook(Request $request){
        $idPlace = $request->local;
        $idEvent = $request->evento;
        $idUser = Auth::user()->id;
        dd($request->all());
    }
}
