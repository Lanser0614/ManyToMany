<?php

namespace App\Http\Controllers;

use App\Models\Trophy;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $trops = Trophy::all();
        $users = User::all();
        return view('welcome', compact('trops', 'users'));
  //  dd($user, $trop);
    }


    public function store(Request $request){
         $user = User::find($request->user) ;
        //  dd($user);
         $trophyId = $request->trophy;
        //  //any user we want to find
         $user->trophies()->attach($trophyId);

         return back();
        // return $user;
    }

    public function update(Request $request){
       // dd($request);
       $user = User::find($request->user) ;
       $user->trophies()->sync([$request->trophy]);

       return $user;
    }

    public function delete(Request $request){
        $user = User::find($request->user) ;
        $trophyId = $request->trophy;

        $user->trophies()->detach($trophyId);

        return $user;
    }
}
