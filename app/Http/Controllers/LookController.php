<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;
use VestindoCerto\Place;
use VestindoCerto\Event;
use VestindoCerto\Clothe;
use VestindoCerto\User;
use Auth;
use DB;

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
        $idPlace = $request->place;
        $idEvent = $request->event;
        $idUser = Auth::user()->id;
        // dd($request->all(), $idPlace, $idUser);

        // $users = new User();
        // $users = User::find(4)->clothes;

        $users = DB::table('clothe')
            ->join('users', 'users.id', '=', 'clothe.fk_user')
            ->join('clothe_place', 'clothe.id', '=', 'clothe_place.clothe')
            ->join('place', 'clothe_place.place', '=', 'place.id')
            ->join('clothe_event', 'clothe.id', '=', 'clothe_event.clothe')
            ->join('event', 'clothe_event.event', '=', 'event.id')
            ->where('place.id', '=', $idPlace)
            ->where('event.id', '=', $idEvent)
            ->where('users.id', '=', $idUser)
            ->get();

        // foreach($users as $key => $value){
        //     dd($value->image);
        // }

        dd($users);
        
        dd($clothes->all()->toArray());
    }
}
