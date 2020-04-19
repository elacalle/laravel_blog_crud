<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Posts::orderByDesc('created_at', 'desc')->get()]);
    }

    public function show(Posts $posts)
    {
        return view('posts.show', ['post' => $posts]);
    }

    public function create()
    {
        $posts = new Posts();
        return view('posts.create', [
            'post' => $posts,
            'tags' => \App\Tags::all()
        ]);
    }

    public function store(PostsRequest $request)
    {
        $posts = new Posts($request->all());

        $posts->user_id = 1;

        $posts->save();

        $posts->tags()->attach(request('tags'));

        return redirect('/posts/create')->with('status', 'Your post has been create sucessfully!');
    }

    public function edit(Posts $posts)
    {
        return view('posts.edit', ['post' => $posts]);
    }

    public function update(Posts $posts, PostsRequest $request)
    {
        $posts->fill($request->all());

        if ($posts->save()) {
            return redirect()->route(
                'posts.edit',
                ['posts' => $posts]
            )->with('status', 'Your post has been modified sucessfully!');
        }

        abort(422, 'Wrong resource');
    }
}
