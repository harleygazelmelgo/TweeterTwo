@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>


        @foreach ($tweet->comments as $comments)
                <p><strong> {{$comments->user->name}}</strong></p>
                <p>{{$comments->content}}</p>

            @endforeach

            <br>

            {{-- <form action="/profile" method="get">
                @csrf
                <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="EditComment">
            </form> --}}




        @endforeach



    @endguest
@endsection
