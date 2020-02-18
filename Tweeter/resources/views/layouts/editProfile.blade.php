@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else

    <div class="box">

        <h1 class="title is-medium">Welcome {{ Auth::user()->name }}</h1>
        <br>

        <p> Update Profile! </p>
        <br>

        <form action="/profile/updateProfile" method="post">
            @csrf
            <div class="form-group">
                <label for="name"><strong>Name:</strong></label>
                <input type="text" class="form-control" id="id" name="name" value="{{ Auth::user()->id}}">

            </div>

            <div class="form-group">
                <label for="username"><strong>Username:</strong></label>
                <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username}}">
            </div>

            <div class="form-group">
                <label for="location"><strong>Location:</strong></label>
                <input type="text" class="form-control" id="location" name="location" value="{{ Auth::user()->location}}">
            </div>

            <div class="form-group">
                <label for="bio"><strong>Bio:</strong></label>
                <input type="text" class="form-control" id="bio" name="bio" value="{{ Auth::user()->bio}}">
            </div>


           <button class="btn btn-primary" type="submit">Update Profile</button>




        </form>



    @endguest
@endsection
