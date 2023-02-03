<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); //select * from posts
//
//        dd($posts); //object of type Collection

        //select * from posts where title ='Javascript'
//        $javascriptPostsOnly = Post::where('title', 'Javascript')->get(); //return object of type collection

        //select * from posts where title ='Javascript' limit 1;
//        $javascriptPostsOnly = Post::where('title', 'Javascript')->first(); //return object of type App\Models\Post

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($postId)
    {
//        dd($postId);
        $post = Post::where('id', $postId)->first(); //select * from posts where id = 1 limit 1;

        $post = Post::find($postId); //select * from posts where id = 1 limit 1;

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', [
            'users' => $users,
        ]);
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
        $postCreatorId = $data['post_creator'];

        //store the form submission data in database
        Post::create([
            'title' => $title,
            'user_id' => $postCreatorId,
            'description' => $description,
        ]);

        return redirect()->route('posts.index');
    }
}
