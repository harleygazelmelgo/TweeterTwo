@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>Welcome {{ Auth::user()->name }}</h1>
        <br>
        <p>Edit Post!</p>
        <br>

        <form action="/profile/updateTweet" method="get">
            @csrf

            <label for="content">Content</label>
            <textarea name="content" rows="10" cols="50"></textarea>
            <br>
            <button type="submit" class="button is-link">Update</button>
        </form>

    @endguest
@endsection
