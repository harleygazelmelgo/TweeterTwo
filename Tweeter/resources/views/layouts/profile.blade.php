@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>

        @foreach ($tweets as $tweet)
            <p><strong> {{$tweet->name}}</strong></p>
            <p>{{$tweet->content}}</p>
            <p><strong> {{$tweet->created_at}}</strong></p>

        @if ($tweet->user_id == (Auth::user()->id))
            <form action="/profile/deleteTweet" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{$tweet->id}}">
            <input type="submit" value="Delete Tweet">
            </form>

            <form action="/profile/updateTweet" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="Update Tweet">
            </form>

        @endif

        @endforeach
        <br><br>
        <form action="/profile/postTweet" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            <textarea name="content" rows="10" cols="50"></textarea>
            <br>
            <input type="submit" value="Create Tweet">
        </form>

    @endguest
@endsection
