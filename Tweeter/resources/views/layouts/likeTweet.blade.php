@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>

        @foreach ($likes as $like) {


        }



        @endforeach



    @endguest
@endsection
