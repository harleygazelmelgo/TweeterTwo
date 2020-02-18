@extends('layouts.app')

<br>

@section('content')


    @guest
        <p>No Tweets available for you!</p>
    @else
    <br>
    <div class="container">
        <div class="box" style="background-color:#85B8CB">
            <div class="card-title">
                <h1 class="title is-5">{{ Auth::user()->name }}</h1>

        <form action="/tweetfeeds/postTweet" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            <textarea name="content" rows="4" cols="50">What's happening?</textarea><br>
            <input type="submit" value="Tweet">
        </form>

        <br>


        @foreach ($tweets as $tweet)
            <p><strong> {{$tweet->user->name}}</strong></p>
            <p><strong> {{$tweet->user->profile->username}}</strong></p>
            <p>{{$tweet->content}}</p>
            <p><small> {{$tweet->created_at}}</small></p>


            <div class="box-footer">
        @if ($tweet->user_id == (Auth::user()->id))
             <br>
            <form action="/tweetfeeds/editTweet" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="hidden" name="content" value="Content">
                <input type="submit" value="Edit">
            </form>
            <form action="/tweetfeeds/deleteTweet" method="get">
            @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="submit" value="Delete">
            </form>
            <form action="/tweetfeeds" method="get">
            @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="submit" value="Like">
            </form>

            </div>

            @endif

            @foreach ($tweet->comments as $comments)
                <p><strong> {{$comments->user->name}}</strong></p>
                <p><strong> {{$comments->user->profile->username}}</strong></p>
                <p>{{$comments->content}}</p>

            @endforeach

            <br>

            <form action="/tweetfeeds" method="get">
                @csrf
                <input type="hidden" name="tweet_id" value="{{$tweet->id}}">
                <textarea name="content" rows="4" cols="40"></textarea><br>
                <input type="submit" value="Comment">

            </form>

            <form action="/tweetfeeds/DeleteCommentsTweet" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$tweet->id}}">
                <input type="submit" value="DeleteComment">
            </form>

            <br>

        @endforeach

        <br><br>

        </div>

    </div>

</div>

<div class="block">
    <nav class="pagination">
        <a href="" class="pagination-previous" disabled>Previous</a>
        <a href="" class="pagination-next">Next Page</a>
        <ul class="pagination-list">
            <li>
                <a href="" class="pagination-link is current">1</a>
            </li>
            <li>
                <a href="" class="pagination-link is current">2</a>
            </li>
            <li>
                <a href="" class="pagination-link is current">3</a>
            </li>
        </ul>
    </nav>

</div>







    @endguest
@endsection
