@extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else

    <div class="container">
        <div class="card" style ="background-color:#85B8CB">
            <div class="card-title">
        <h1 class="title is-5">Welcome {{ Auth::user()->name }}</h1>
        <br>
        <p>Edit Comments Tweet!</p>
        <br>


        <form action="/tweetfeeds/editComments/{{$comments->id}}" method="get" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <br>
            <input type="hidden" name="id" value="{{$comments->id}}">
            <br>

            <textarea class="form-control z-depth-1"  rows="4" cols="40" type="text" name="content">{{$comments-> content}}</textarea>
            <br><br>

            <button type="submit" class="btn btn-primary">Update Comments</button>

        </form>

        @if($errors->any())
            @foreach ($errors->all as $error)

            @endforeach
        @endif



    @endguest
@endsection


