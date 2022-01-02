<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function add(){
   
    return view('posts.add');
    }

      public function showArticles(){
          $posts = Post::all();
        return view('posts.articles',['posts' => $posts]);
    }


    public function store(){
    $post = new Post;
    $post->title = request('title');
    $post->description = request('description');
    $post->author = request('author');
    error_log($post);
     $post->save();
        return redirect('/');
    }

}
