<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    function show() {
        if(Auth::check()) {
            $result = \App\Profile::all();
            return view ('layouts.userProfile', ['profiles' => $result]);
        } else {
            return view('layouts.userProfile');
        }
    }

    function postUser (Request $request)  {
        if(Auth::check()) {
        $profile = new \App\Profile();
        $profile->user_id = $request->user_id;
        $profile->bio = $request->bio;
        $profile->save();

        $result = \App\Profile::all();
        return view ('layouts.userProfile', ['profiles' => $result]);
    } else {
        return view('layouts.userProfile');
    }

    }
}
