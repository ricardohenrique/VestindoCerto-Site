<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;
use VestindoCerto\Place;
use VestindoCerto\Event;
use VestindoCerto\Clothe;
use VestindoCerto\User;
use Auth;
use DB;
use VestindoCerto\Look;

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

        $users = DB::table('clothe')
                    ->join('users', 'users.id', '=', 'clothe.fk_user')
                    ->join('clothe_place', 'clothe.id', '=', 'clothe_place.clothe')
                    ->join('place', 'clothe_place.place', '=', 'place.id')
                    ->join('clothe_event', 'clothe.id', '=', 'clothe_event.clothe')
                    ->join('event', 'clothe_event.event', '=', 'event.id')
                    ->join('type', 'clothe.fk_type', 'type.id')
                    ->join('type_master', 'type.master', 'type_master.id')
                    ->where('place.id', '=', $idPlace)
                    ->where('event.id', '=', $idEvent)
                    ->where('users.id', '=', $idUser)
                    ->select("clothe.*", "type_master.id as up_or_down")
                    ->inRandomOrder()
                    ->get();

        $up = false;
        $down = false;
        foreach($users as $key => $value){
            if($value->up_or_down == 1 && $up == false){
                $lookPiece[] = $value;
                $up = true;
            }else if($value->up_or_down == 2 && $down == false){
                $lookPiece[] = $value;
                $down = true;
            }
            if($up == true && $down == true){
                break;
            }
        }

        $lookPiece = collect($lookPiece)->sortBy('up_or_down')->toArray();
        
        $data["look"] = $lookPiece;
        
        $look["fk_event"] = $idEvent;
        $look["fk_place"] = $idPlace;
        $look["fk_user"] = $idUser;
        $data["old_infos"] = $look;
        // dd($data);
        $newLook = Look::create($look);
        
        return view("usuario/look-view", $data);
    }
}
