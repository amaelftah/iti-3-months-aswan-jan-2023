<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'laravel',
                'description' => 'test',
                'posted_by' => 'Ahmed',
                'created_at' => '2022-10-01 01:00:00',
            ],
            [
                'id' => 2,
                'title' => 'java script',
                'description' => 'test 123',
                'posted_by' => 'Mohamed',
                'created_at' => '2022-09-10 02:00:00',
            ],
        ];

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
