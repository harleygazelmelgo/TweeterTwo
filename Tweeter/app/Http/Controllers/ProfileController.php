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

    function editBio(Request $request) {

            $profiles = \App\Profile::find(Auth::user()->id);
            $profiles->bio = $request->content;

            return view ('layouts.editBio', ['profiles' => $profiles]);

    }


    function updateBio(Request $request)  {
        if(Auth::check()) {

        $profiles = \App\Profile::find(Auth::user()->id);
        $profiles->bio = $request->content;
        $profiles->save();

        $result = \App\User::find(Auth::user()->id)->tweets;

             return view ('layouts.userProfile', ['profiles' => $profiles, 'tweets' => $result]);

        } else {
            return redirect('/home');
        }

    }

}








