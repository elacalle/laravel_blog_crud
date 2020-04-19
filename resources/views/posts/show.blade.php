@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="{{ url("/posts", $post->id)}}">
                    <h2 class="post-title">
                       {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                       {{ $post->content }}
                    </h3>
                    <p class="post-meta">Posted by <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at }}</p>
                    <p class="post-meta">
                        Tags:
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('tags.show', $tag->name) }}">{{ $tag->name }}</a>
                        @endforeach
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection
