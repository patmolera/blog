<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __contruct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {

      $posts = Post::latest()
              ->filter(request(['month', 'year']))
              ->get();


      return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {
      // $post = new Post;
      $this->validate(request(),[
        'title' => 'required',
        'body' => 'required'
      ]);

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );



      return redirect('/');
    }
}
