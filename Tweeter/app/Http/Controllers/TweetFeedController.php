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

    function editTweet(Request $request) {
        $tweet = \App\Tweet::find($request->get('user_id'));
        $tweet->content = $request->content;

        return view ('layouts.editTweet', ['tweets' => $tweet]);

    }

    function updateTweet(Request $request) {
        if(Auth::check()) {
        $tweet = \App\Tweet::find($request->id);
        $tweet->content = $request->content;
        $tweet->save();

        $result = \App\Tweet::all();
        return view ('layouts.profile', ['tweets' => $result]);

        } else {
            return redirect('/home');
        }

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

    function followUsers (Request $request) {
        if(Auth::check()) {
            $follow_relationship = new \App\FollowRelationship();
            $follow_relationship->followed_id = $request->followed_id;
            $follow_relationship->user_id = Auth::user()->id;
            $follow_relationship->save();
            return redirect('/showProfiles');
        }

    }

    function UnfollowUsers (Request $request) {
        if(Auth::check()) {
        $follow_relationship = \App\FollowRelationship::where('user_id', Auth::user()->id)->where('followed_id', $request->user_id)->get();
        $follow_relationship[0]->delete();
        return redirect('/showProfiles');

    }

    function likesTweet(Request $request) {
        if(Auth::check()) {
        $likes = \App\Likes::find($request->id);
        $likes->user_id = $request->user_id;
        $likes->tweet_id = $request->tweet_id;


        $result = \App\User::find(Auth::user()->id)->tweets;
             return view ('layouts.profile', ['likes' => $likes, 'tweets' => $result]);

        } else {
            return redirect('/home');
        }

    }

    // function commentsTweet(Request $request) {
    //     if(Auth::check()) {
    //     $comments = \App\Comments::find($request->id);
    //     $comments->content = $request->content;
    //     $comments = $tweets->comments;
    //     $comments->save();


    //     $result = \App\User::find(Auth::user()->id)->tweets;
    //     return view ('layouts.profile', ['comments' => $comments, 'tweets' => $result]);;

    //     } else {
    //         return view('layouts.profile');
    //     }

    // }






}

