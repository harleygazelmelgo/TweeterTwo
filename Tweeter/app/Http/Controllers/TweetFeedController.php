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
        $follow_relationship = \App\FollowRelationship::where('user_id', Auth::user()->id)->get();

        return view ('layouts.allUsers', ['users' => $users, 'follow_relationship' => $follow_relationship]);
        } else {

            return redirect('/home');
        }

    }

    function showFollowUsers () {
        if(Auth::check()) {
        $users = \App\User::all();
        $follow_relationship = \App\FollowRelationship::where('followed_id', Auth::user()->followed_id)->get();
        return view ('layouts.allUsers', ['users' => $users, 'follow_relationship' => $follow_relationship]);

        } else {
            return redirect('layouts.allUsers');
        }

    }

}

