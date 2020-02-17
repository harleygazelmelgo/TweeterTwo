@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>

           <p> {{ $profiles->username }} </p>
           <p> {{ $profiles->location }} </p>
           <br>
           <p> {{ $profiles->bio }} </p>

{{--
        @if ($profiles->user_id == (Auth::user()->id)) --}}
        <form action="/userProfile/editBio" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            {{-- <textarea name="content" rows="2" cols="30"></textarea>
            <br> --}}
            <input type="submit" value="Update Bio">
        </form>

        {{-- @endif --}}

        <br><br>

            @foreach ($tweets as $tweet)

                <p>{{$tweet->content}}</p>
                <p><strong> {{$tweet->created_at}}</strong></p>


            @endforeach

    @endguest

@endsection
