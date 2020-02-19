@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else

    <div class="block">
        <div class="box">
            <div class="box" style ="background-color:#85B8CB">

        <h1 class="title is-medium">Welcome {{ Auth::user()->name }}</h1>
        <br>

        <p> Update Profile! </p>

        <br>

        <form action="/profile/updateProfile" method="post">
            @csrf
            <div class="form-group">
                <label for="name"><strong>Name: </strong></label>
                <input type="text"  id="id" name="name" value="{{ Auth::user()->name}}"><br>
            </div>
            <br>

            <div class="form-group">
                <label for="username"><strong>Username: </strong></label>
                <input id="username" name="username" value="{{ Auth::user()->username}}">
            </div>
            <br>

            <div class="form-group">
                <label for="location"><strong>Location:  </strong></label>
                <input type="text" id="location" name="location" value="{{ Auth::user()->location}}">
            </div>
            <br>

            <div class="form-group">
                <label for="bio"><strong>Bio:  </strong></label>
                <input type="text" id="bio" name="bio" value="{{ Auth::user()->bio}}">


            </div>
            <br>

                <button class="btn btn-primary" type="submit">Update Profile</button>

        </form>

            </div>
        </div>

    </div>

    @endguest
@endsection


