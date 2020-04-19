@extends('layout')

@section('content')
    @if (!session('status'))
        <h2>Create new Post</h2>
        <hr>
        <form method="POST" action="/posts/create">
            @include('posts._form')
            <input type="submit" value="New post">
        </form>
    @else
        <h2>  {{ session('status') }} </h2>
    @endif
@endsection
