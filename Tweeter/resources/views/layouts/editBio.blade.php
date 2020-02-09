@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>Welcome {{ Auth::user()->name }}</h1>
        <br>
        <p> Edit Bio Profile! </p>
        <br>

        <form action="/userProfile/updateBio" method="get">
            @csrf

            <label for="content">Description: </label>
            <br>
            <textarea name="content" rows="10" cols="50"></textarea>
            <br><br>
            <button type="submit" class="button is-link">Update Bio</button>
        </form>

    @endguest
@endsection
