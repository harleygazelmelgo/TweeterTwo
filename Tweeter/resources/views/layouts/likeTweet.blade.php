@extends('layouts.app')

@php
    $likeCount = count(\App\Tweet::find($tweet->id)->like);

@endphp


@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>

        @foreach ($likes as $like) {
            <p><strong> {{$like->user->name}}</strong></p>




        }



        @endforeach



    @endguest
@endsection
