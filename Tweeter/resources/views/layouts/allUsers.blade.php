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


@endphp



    @section('content')
    <br>

<div class="container">
    <div class="box" style="background-color:#6cffff">
        <h1 class="title is-5">Followers</h1>

        <div class="box-heading" >
        <br>

        @foreach ($users as $user)
            <br>
            <p><strong> <a href="/profile">{{$user->name}}</a> </strong></p>
            <p><strong> {{$user->profile->username}} </strong></p>


        @if (checkFollowing($user->id, Auth::user()->follow_relationship))
            <p> Already following! </p>
            <form action="/followerprofiles/UnfollowUsers" method="get" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="submit" class="pull-right btn btn-small" value="Unfollow">
                <br>

            </form>

        @else
            <form action="/followerprofiles/followUsers" method="get">
                @csrf
                <input type="hidden" name="followed_id" value="{{$user->id}}">
                <input type="submit" class="pull-right btn btn-small" value="Follow">
                <br>

            </form>

        @endif

        @endforeach

        </div>

    </div>


</div>

{{-- <div class="block">
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

</div> --}}


@endsection

