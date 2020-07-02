<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        //Zwracanie aktualnie zalogowanego usera
        $id = Auth::id();
        $loggedUser = User::find($id);

        //Pobranie wszystkich danych z tabeli developer
        $dataDev = DB::table('developer')
            ->get(); 
        
        return view('adminLTE.developer', ["loggedUser"=>$loggedUser, 'dataDev' => $dataDev]);
    }

    public function single(Request $request, $id)
    {
        $idUser = Auth::id();
        $loggedUser = User::find($idUser);

        $dataDev = DB::table('developer')
            ->where('id', $id)
            ->get(); 
        
        return view('adminLTE.oneDeveloper', ["loggedUser"=>$loggedUser, 'dataDev' => $dataDev]);
    }
}
