@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else

    <div class="container">
        <div class="box" style ="background-color:#85B8CB">
            <div class="card-title">
        <h1 class="title is-5">Welcome {{ Auth::user()->name }}</h1>
        <br>
        <p>Edit Tweet!</p>
        <br>


        <form action="/tweetfeeds/updateTweet" method="post" enctype="multipart/form-data">
            @csrf


            <input type="hidden" name="id" value="{{$tweets->id}}">
            <br>
            <label for="content">Content: </label>
            <br>
            <textarea name="content" rows="10" cols="40"></textarea>
            <br><br>

            <button type="submit" class="btn btn-primary">Update Tweet</button>



        </form>

    @endguest
@endsection


