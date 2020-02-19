@extends('layouts.app')

@section('content')



    @guest
        <p>No Tweets available for you!</p>
    @else

    <div class="box" style="background-color:#6cffff">

           <p><strong> {{ Auth::user()->name }}</strong></p>
           <p> {{ $profiles->username }} </p>
           <p> {{ $profiles->location }} </p>
           <br>
           <p> {{ $profiles->bio }} </p>


        <form action="/profile/editProfile" method="get">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">

            <input type="submit" value="Update Profile">
        </form>


        <br><br>

            @foreach ($tweets as $tweet)

            <p><strong> {{$tweet->user->name}}</strong></p>
            <p><strong> {{$tweet->user->profile->username}}</strong></p>
            <p>{{$tweet->content}}</p>
            <p><small> {{$tweet->created_at}}</small></p><br>



            @endforeach

    @endguest

    </div>

</div>



@endsection
