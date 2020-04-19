@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{ route("posts.show", $post)}}">
                        <h2 class="post-title">
                           {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                           {{ $post->content }}
                        </h3>
                        <p class="post-meta">Posted by <a href="#">{{ $post->author }}</a> on {{ $post->created_at }}</p>
                    </a>
                </div>
                <hr>
            </div>
        </div>
    @endforeach
@endsection
