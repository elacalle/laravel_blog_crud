@extends('layout')

@section('content')
    @if (!session('status'))
        <h2>Edit Post</h2>
        <hr>
        <form method="POST" action="/posts/{{$post->id}}/edit">
            @method('PUT')
            @include('posts._form')
            <input type="submit" value="Save post">
        </form>
    @else
        <h2>  {{ session('status') }} </h2>
    @endif

@endsection
