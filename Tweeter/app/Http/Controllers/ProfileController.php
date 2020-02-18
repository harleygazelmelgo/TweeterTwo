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

        return view ('layouts.profile', ['profiles' => $profiles, 'tweets' => $result]);

    } else {
        return view('layouts.profile');
    }

    }

    function editProfile(Request $request) {

            $profiles = \App\Profile::find(Auth::user()->id);
            $profiles->username = $request->username;
            $profiles->location = $request->location;
            $profiles->bio = $request->bio;


            return view ('layouts.editProfile', ['profiles' => $profiles]);

    }


    function updateProfile(Request $request)  {
        if(Auth::check()) {

        $profiles = \App\Profile::find(Auth::user()->id);
        $profiles->username = $request->username;
        $profiles->location = $request->location;
        $profiles->bio = $request->bio;

        $profiles->save();

        $result = \App\User::find(Auth::user()->id)->tweets;

             return view ('layouts.profile', ['profiles' => $profiles, 'tweets' => $result]);

        } else {
            return redirect('/home');
        }

    }

}








