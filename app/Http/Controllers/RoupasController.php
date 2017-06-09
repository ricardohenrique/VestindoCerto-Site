<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;
use VestindoCerto\User;
use VestindoCerto\Clothe;
use VestindoCerto\Place;
use VestindoCerto\Event;
use VestindoCerto\Type;
use Auth;
use Carbon\Carbon;
use File;
use Response;

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

    public function create(){
        $place = new Place();
        $event = new Event();
        $type = new Type();
        $data['places'] = $place->all()->toArray();
        $data['events'] = $event->all()->toArray();
        $data['type'] = $type->all()->toArray();

        return view('usuario/roupas/create', $data);
    }

    public function store(Request $request){
        $current_time = Carbon::now();
        $timestamp = $current_time->timestamp;
        $extension = $request->image->extension();
        
        $newImageName = $timestamp.".".$extension;
        $path = $request->image->storeAs('images', $newImageName);

        $clothe["image"] = $newImageName;
        $clothe["fk_type"] = $request->type;
        $clothe["fk_user"] = Auth::user()->id;
        $clothe["rating"] = 4;
        $newClothe = Clothe::create($clothe);

        return redirect("usuario/roupas")->with('status-sucess', 'Roupa cadastrada com sucesso');
    }

    public function render($file){
        $path = storage_path('app/images/'.$file);

        if(File::exists($path)){
            $file = file_get_contents($path);
            $type = File::mimeType($path);

            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
            return $response;
        }else{
            return response()->json(array(
                'status' => false,
                'request' => $file,
                'error' => "FILE_NOT_EXIST"
            ));
        }
        
    }
}
