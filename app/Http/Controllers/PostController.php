<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); //select * from posts
//
//        dd($posts); //object of type Collection

        //select * from posts where title ='Javascript'
//        $javascriptPostsOnly = Post::where('title', 'Javascript')->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($postId)
    {
//        dd($postId);
        $post = [
            'id' => 1,
            'title' => 'laravel',
            'description' => 'test',
            'posted_by' => 'Ahmed',
            'created_at' => '2022-10-01 01:00:00',
        ];

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //take the form submission data

//        $data = request()->all();
//        $title = $data['title'];
//        $description = $data['description'];
//        $postCreator = $data['post_creator'];

//        $title = request()->title;
//        $description = request()->description;
//        $postCreator = request()->postCreator;

        $data = $request->all();
        $title = $data['title'];
        $description = $data['description'];
        $postCreator = $data['post_creator'];

        dd($title, $description, $postCreator);
        //store the form submission data in database

        return 'we are in store';
    }
}
