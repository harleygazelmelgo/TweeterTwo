@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>

        @foreach ($tweets as $tweet)
            <p><strong> {{$tweet->user->name}}</strong></p>
            <p>{{$tweet->content}}</p>
            <p><strong> {{$tweet->created_at}}</strong></p>


        @if ($tweet->user_id == (Auth::user()->id))
            <form action="/profile/editTweet" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="Edit">
            </form>

            <form action="/profile/deleteTweet" method="get">
            @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="submit" value="Delete">
            </form>

            <form action="/profile" method="get">
            @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="submit" value="Like">
            </form>
            <br>

            @endif

            @foreach ($tweet->comments as $comments)
                <p><strong> {{$comments->user->name}}</strong></p>
                <p>{{$comments->content}}</p>

            @endforeach

            <br>
            <form action="/profile" method="post">
                @csrf
                <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
             <textarea name="content" rows="2" cols="30"></textarea>
            <br>
            <input type="submit" value="Comment">
            </form>

            <form action="/profile/DeleteCommentsTweet" method="get">
                @csrf
                <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
                <input type="submit" value="DeleteComment">
            </form>


        @endforeach

        <br><br>


        <form action="/profile/postTweet" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            <textarea name="content" rows="10" cols="50"></textarea>
            <br>
            <input type="submit" value="Create">
        </form>



    @endguest
@endsection
