@extends('layouts.app')

@php

    function checkFollowing($userToCheck, $follow_relationship) {
        foreach($follow_relationship as $follow) {
            if($follow->followed_id == $userToCheck) {
                return true;
            }
        }
        return false;
    }

    // function checkFollowed($followedToCheck, $follow_relationship) {
    //     foreach($follow_relationship as $follow) {
    //         if($follow->followed_id  == $followedToCheck) {
    //             return true;
    //         }
    //     }
    //     return false;
    // }

@endphp


@section('content')
    <h1> List of Users!</h1>
        <br><br>
        @foreach ($users as $user)
            <p> {{$user->name}} </p>
        @if (checkFollowing($user->id, $follow_relationship))
            <p> Already following! </p>

        @else
            <form action="/showProfiles/followUsers" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="submit" value="Follow">

            </form>

        @endif

        @if (checkFollowing($user->id, $follow_relationship))

            <form action="/showProfiles/UnfollowUsers" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="submit" value="Unfollow">

            </form>

        @endif

        @endforeach

@endsection
