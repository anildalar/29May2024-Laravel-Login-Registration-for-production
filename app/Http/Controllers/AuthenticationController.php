<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    //

    public function store(Request $request){
        //dd($request->only('email','password'));
        $data = $request->only('name','email','password');
        //INsert

        //1. QueryBUild
        //2. Eleqouent  (Production)
        User::create($data);
        return back()->withInput();
    }
}
