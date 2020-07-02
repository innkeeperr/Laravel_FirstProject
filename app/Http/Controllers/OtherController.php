<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\DB;
use App\User;

class OtherController extends Controller
{
    public function contact()
    {      
        $id = Auth::id();
        $loggedUser = User::find($id);

        return view('adminLTE.contact', ["loggedUser"=>$loggedUser]);
    }
}
