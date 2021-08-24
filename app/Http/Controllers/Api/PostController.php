<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return PostResource::collection($posts);
    }


    public function show($id)
    {
        $post=Post::find($id);
        return new PostResource($post);
    }

    public function destroy($id)
    {
        return Post::destroy($id);
    }
    public function store(Request $request)
    {
        Post::create(
            [
                'title'=>$request->title,
                'name'=>$request->name,
                'description'=>$request->description,
                'user_id'=>Auth::id()
            ]
        );
        $posts=Post::all();

        return PostResource::collection($posts);
    }
   

}
