<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;
use VestindoCerto\User;
use VestindoCerto\Clothe;
use Auth;

class RoupasController extends Controller
{
    public function index(){
        $idUser = Auth::user()->id;
        // $allClothes = User::find($idUser)->clothes;
        $allClothes = Clothe::join('users', 'clothe.fk_user', 'users.id')
                            ->join('type', 'type.id', 'clothe.fk_type')
                            ->select('clothe.id as id_roupa', 'clothe.image as image_name', 'type.name as clothe_type', 'clothe.rating as rating')
                            ->get();
        // dd($allClothes);
        $data['clothes'] = $allClothes->toArray();
    	return view('usuario.roupas.index', $data);
    }
}
