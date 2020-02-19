@extends('layouts.app')



@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>

        @foreach ($tweets as $tweet)
            @php
                $count = sizeOf(\App\Tweet::find($tweet->id)->likes);
                $comments = \App\Tweet::find($tweet->id)->comments;

            @endphp

                <div class="column">
                    @php
                        $tweetUser = \App\User::find($tweet->user_id);

                     @endphp

                     <p><strong> {{$tweetUser->name}}</strong></p>
                     <p>{{$tweet->content}}</p>
                     <p><small> {{$tweet->created_at}}</small></p>

                </div>






        @endforeach

    @endguest
@endsection
