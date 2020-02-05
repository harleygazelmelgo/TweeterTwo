@extends('layouts.app')

@php

    function checkFollowing($userToCheck, $followrelationship) {
        foreach($followrelationship as $followrelationship) {
            if($followrelationship->followed_id == $userToCheck) {
                return true;
            }
        }
        return false;
    }

@endphp

@section('content')
    <h1> List of Users!</h1>
        <br><br>
        @foreach ($users as $user)
            <p> {{$user->name}} </p>
        @if (checkFollowing($user->name, $followrelationship))
            <p> Already following! </p>

        @else
            <form action="/followUser" method="post">
                @csrf
                <input type="submit" value="Follow">
                {{-- <input type="submit" value="Unfollow"> --}}
            </form>

        @endif

        @endforeach

@endsection
