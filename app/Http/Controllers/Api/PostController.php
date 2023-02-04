<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return PostResource::collection($posts);

//        $response = [];
//
//        foreach ($posts as $post) {
//            $response [] = [
//                'id' => $post->id,
//                'my_title' => $post->title,
//            ];
//        }
//
//        return $response;
    }

    public function show($postId)
    {
        $post = Post::find($postId);

        return new PostResource($post);
//        return [
//            'id' => $post->id,
//            'my_title' => $post->title,
//        ];
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->all();
        $title = $data['title'];
        $description = $data['description'];
        $postCreatorId = $data['post_creator'];

        //store the form submission data in database
        $post = Post::create([
            'title' => $title,
            'user_id' => $postCreatorId,
            'description' => $description,
        ]);

        return [
            'id' => $post->id,
            'my_title' => $post->title,
        ];
    }
}
