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
            return view ('layouts.tweetfeeds', ['tweets' => $result]);
        } else {
            return view('layouts.tweetfeeds');
        }
    }

    function postTweet(Request $request)  {
        if(Auth::check()) {
        $tweet = new \App\Tweet;
        $tweet->user_id = $request->user_id;
        $tweet->content = $request->content;
        $tweet->created_at = $request->created_at;
        $tweet->save();

        $result = \App\Tweet::all();
        return view ('layouts.tweetfeeds', ['tweets' => $result]);
    } else {
        return view('layouts.tweetfeeds');
    }

    }

    function deleteTweet(Request $request) {

        $tweet = \App\Tweet::find($request->get('user_id'));
        $tweet->delete();
        $result = \App\Tweet::all();
        return view ('layouts.tweetfeeds', ['tweets' => $result]);

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
        return view ('layouts.tweetfeeds', ['tweets' => $result]);

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
            return redirect('/followerprofiles');
        }

    }

    function UnfollowUsers (Request $request) {
        if(Auth::check()) {
        $follow_relationship = \App\FollowRelationship::where('user_id', Auth::user()->id)->where('followed_id', $request->user_id)->get();
        $follow_relationship[0]->delete();
        return redirect('/followerprofiles');

        }

    }

    function likesTweet(Request $request) {
        if(Auth::check()) {
        $likes = \App\Likes::find($request->id);
        $likes->user_id = Auth::user()->id;
        $likes->tweet_id = $request->tweet_id;
        $likes->save();


        $result = \App\User::find(Auth::user()->id)->tweets;
             return view ('layouts.tweetfeeds', ['likes' => $likes, 'tweets' => $result]);

        } else {
            return redirect('/home');
        }

    }

    function commentsTweet(Request $request) {
        if(Auth::check()) {
        $comments = new \App\Comments();
        $comments->tweet_id = $request->tweet_id;
        $comments->content = $request->content;
        $comments->user_id = Auth::user()->id;
        $comments->save();


        $result = \App\User::find(Auth::user()->id)->tweets;
        return view ('layouts.tweetfeeds', ['comments' => $comments, 'tweets' => $result]);

        } else {

            return redirect('/home');
        }

    }

    function DeleteCommentsTweet(Request $request) {

        $comments = \App\Comments::find($request->get('tweet_id'));
        $comments->delete();
        $result = \App\Comments::all();
        return view ('layouts.tweetfeeds', ['comments' => $result]);

    }











}

