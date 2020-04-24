@extends('layouts.app')

@section('content')

    @guest
        <p>No Tweets available for you!</p>
    @else

        <div class="block">
            <div class="card-head" style="background-color:#6cffff" >
                <br>
                <h1><strong> {{ Auth::user()->name }}</strong></h1>
                <p> {{ $profiles->username }} </p>
                <p> {{ $profiles->location }} </p>
                <br>
                <p> {{ $profiles->bio }} </p>

                <form action="/profile/editProfile" method="get">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">

                    <input type="submit" value="Update Profile">
                </form>

                <hr>

                    <div class="card-content">

                        @foreach ($tweets as $tweet)

                            <h1><strong> {{$tweet->user->name}}</strong></h1>
                            <p> {{$tweet->user->profile->username}}</p>
                            <p>{{$tweet->content}}</p>
                            <p><small> {{$tweet->created_at}}</small></p><br>

                        @endforeach

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
