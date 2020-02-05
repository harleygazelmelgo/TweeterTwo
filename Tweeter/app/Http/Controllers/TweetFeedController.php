<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class TweetFeedController extends Controller

{

    function show() {
        if(Auth::check()) {
            $result = \App\Tweet::all();
            return view ('layouts.profile', ['tweets' => $result]);
        } else {
            return view('layouts.profile');
        }
    }

    function postTweet(Request $request)  {
        if(Auth::check()) {
        $tweet = new \App\Tweet;
        $tweet->user_id = $request->user_id;
        $tweet->content = $request->content;
        $tweet->save();

        $result = \App\Tweet::all();
        return view ('layouts.profile', ['tweets' => $result]);
    } else {
        return view('layouts.profile');
    }

    }

    function deleteTweet(Request $request) {

        $tweet = \App\Tweet::find($request->get('user_id'));
        $tweet->delete();

        $result = \App\Tweet::all();
        return view ('layouts.profile', ['tweets' => $result]);

    }

        function updateTweet(Request $request) {
        $tweet = \App\Tweet::find($request->get('user_id'));

        $result = \App\Tweet::all();
        return view ('layouts.updateTweet', ['tweets' => $result]);


    }

    function showAllUsers () {
        if(Auth::check()) {
        $users = \App\User::all();
        $followrelationship = \App\FollowRelationship::where('user_id', Auth::user()->id)->get();
        return view ('layouts.allUsers', ['users' => $users, 'followrelationship' => $followrelationship]);
        } else {
            return redirect('/home');
        }

    }

    // function followUser () {
    //     if(Auth::check()) {
    //     $users = \App\User::all();
    //     $follows = \App\Follows::where('followed', Auth::user()->name)->get();
    //     return view ('layouts.allUsers', ['users' => $users, 'follows' => $follows]);

    //     } else {
    //         return redirect('layouts.allUsers');
    //     }

    // }

}
