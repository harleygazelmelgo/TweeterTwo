@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>

        @foreach ($profiles as $profile)

            <p>{{$profile->bio}}</p>



        @if ($profile->user_id == (Auth::user()->id))
        <form action="/userProfile/updateBio" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            <textarea name="content" rows="2" cols="30"></textarea>
            <br>
            <input type="submit" value="Update Bio">
        </form>

        @endif

        @endforeach



    @endguest
@endsection
