<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class ProfileController extends Controller
{


    function show (Request $request)  {
        if(Auth::check()) {
        $profiles = \App\Profile::find(Auth::user()->id);
        $result = \App\User::find(Auth::user()->id)->tweets;

        return view ('layouts.userProfile', ['profiles' => $profiles, 'tweets' => $result]);

    } else {
        return view('layouts.userProfile');
    }

    }

    function updateBio(Request $request) {
        $profiles = \App\Profile::find(Auth::user()->id);



        return view ('layouts.userProfile', ['profiles' => $profiles]);

    }

}
