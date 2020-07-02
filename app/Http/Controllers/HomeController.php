<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $loggedUser = User::find($id);
        return view('adminLTE.dashboard', ["loggedUser"=>$loggedUser]);
    }

    public function sidebar()
    {
        $id = Auth::id();
        $loggedUser = User::find($id);
        return view('layouts.sidebar', ["loggedUser"=>$loggedUser]);
    }

}
