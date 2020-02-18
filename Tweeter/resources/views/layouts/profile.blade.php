@extends('layouts.app')

@section('content')



    @guest
        <p>No Tweets available for you!</p>
    @else

    <div class="box" style="background-color:#85B8CB">

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

@endsection
