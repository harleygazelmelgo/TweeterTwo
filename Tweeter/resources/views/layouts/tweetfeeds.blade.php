@extends('layouts.app')

<br>

@section('content')

    @guest
        <p>No Tweets available for you!</p>
    @else
    <br>
    <div class="container">

        <div class="box" style ="background-color:#6cffff">
            <div class="card-title">
                <h1 class="title is-5">{{ Auth::user()->name }}</h1>

        <form action="/tweetfeeds/postTweet" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            <textarea name="content" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Tweet">
        </form>

        <br>


        @foreach ($tweets as $tweet)
            @php
                $count = sizeOf(\App\Tweet::find($tweet->id)->likes);
            @endphp
            
            <p><strong> {{$tweet->user->name}}</strong></p>
            <p><strong> {{$tweet->user->profile->username}}</strong></p>
            <p>{{$tweet->content}}</p>
            <p><small> {{$tweet->created_at}}</small></p>


        @if ($tweet->user_id == (Auth::user()->id))
             <br>
            <form  action="/tweetfeeds/editTweet" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="Edit">
            </form>

            <form  action="/tweetfeeds/deleteTweet" method="get">
            @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="submit" value="Delete">
            </form>

            <form  action="/tweetfeeds/likesTweet" method="post">
                @csrf
                    <input type="hidden" name="user_id" value="{{$tweet->id}}">
                    {{-- <input type="submit" value="Like"> --}}
                    <button  @click="likebtn">Like</button>
            </form>


        @endif

        <br>
            @foreach ($tweet->comments as $comments)
                <p><strong> {{$comments->user->name}}</strong></p>
                <p><strong> {{$comments->user->profile->username}}</strong></p>
                <p>{{$comments->content}}</p>

            @endforeach

                <form action="/tweetfeeds/commentsTweet" method="get">
                    @csrf
                    <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
                    <textarea name="content" rows="4" cols="40"></textarea><br>
                    <input type="submit" value="Comments Tweet">

                </form>

                <form action="/tweetfeeds/DeleteCommentsTweet" method="get">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$tweet->id}}">
                    <input type="submit" value="Delete Comment">
                </form>

                <form  action="/tweetfeeds/editComments" method="get">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$tweet->id}}">
                    <input type="hidden" name="content" value="Content">
                    <input type="submit" value="Edit Comments">
                </form>




        @endforeach






            </div>
        </div>

        </div>

    </div>


    @endguest
@endsection
