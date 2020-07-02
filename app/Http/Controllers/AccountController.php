<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\DB;
use App\User;

class AccountController extends Controller
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

        $myCity = DB::table('users')
            ->select('city.id', 'city.city')
            ->Join('city', 'city_id', 'city.id')
            ->where([
                ['users.id', $id]
                ])
            ->orderBy('city.city')
            ->get(); 

        $dataCities = DB::table('city')
            ->select('id', 'city')
            ->orderBy('city')
            ->get(); 

        $dataStates = DB::table('users')
            ->select('state.id', 'state.state')
            //w JOIN: ktora tabela, kolumna z poprzedniej, klucz glowny z joinowanej
            ->leftJoin('city', 'city_id', 'city.id')
            ->leftJoin('state', 'state_id', 'state.id')
            ->where('users.id', $id)
            ->orderBy('state')
            ->get(); 
   
        return view('adminLTE.account', ["loggedUser"=>$loggedUser, 'myCity' => $myCity, 'cityData' => $dataCities, 'stateData' => $dataStates]);
    }

    public function update(Request $request)
    {
        if(request()->has('submitChanges'))
        {
            $id = Auth::id();
            $loggedUser = User::find($id);

            $firstName = $request->firstNameChange;
            $surname = $request->surnnameChange;
            $city = $request->city;

            if($firstName == '' || $firstName == null)
            {
                $firstName = DB::table('users')
                ->select('name')
                ->where('id', $id)
                ->value('name');
            }

            if($surname == '' || $surname == null)
            {
                $surname = DB::table('users')
                ->select('surname')
                ->where('id', $id)
                ->value('surname');
            }

            if($city == '' || $city == null)
            {
                $city = DB::table('users')
                ->select('city_id')
                ->where('id', $id)
                ->value('city_id');
            }

            $data = DB::table('users')
            -> where('id', $id)
            -> update(
                [
                    'name' => $firstName,
                    'surname' => $surname,
                    'city_id' => $city
                ]
            );

            return redirect('/account');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
