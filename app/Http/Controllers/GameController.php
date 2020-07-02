<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class GameController extends Controller
{
    public function index(Request $request)
    {
        //Zwracanie aktualnie zalogowanego usera
        $id = Auth::id();
        $loggedUser = User::find($id);

        $dataGames = DB::table('game')
            ->orderBy('title')
            ->get(); 
        
        return view('adminLTE.dashboard', ["loggedUser"=>$loggedUser, 'dataGames' => $dataGames]);
    }

    public function single(Request $request, $id)
    {
        $idUser = Auth::id();
        $loggedUser = User::find($idUser);

        $dataGame = DB::table('game')
            ->leftJoin('developer', 'id_developer', 'developer.id')
            ->where('game.id', $id)
            ->get(); 
        
        return view('adminLTE.oneGame', ["loggedUser"=>$loggedUser, 'dataGame' => $dataGame]);
    }


}
