<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signup;


class HomeTeamController extends Controller
{
    // 

    public function signup(Request $request){
        $newSignUp = new SignUp;
        $newSignUp->name = $request->signUp;
        $newSignUp->is_complete = 0;
        $newSignUp->save();

        return view ('welcome');
    }
}