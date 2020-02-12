{{-- @extends('layouts.app')

@section('content')
    @guest
        <p>No Tweets available for you!</p>
    @else
        <h1>{{ Auth::user()->name }}</h1>
        <br><br>

        @foreach ($comments as $comment)
            @if ($comment->user_id == (Auth::user()->id))
            <form action="/profile" method="get">
                @csrf
                <input type="hidden" name="user_id" value="{{$comment->id}}">
                <textarea name="content" rows="2" cols="30"></textarea>
            <br>
                <input type="submit" value="Comment">
                </form>

            @endif

        @endforeach



    @endguest
@endsection --}}
