<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home' , ['posts' => $posts]);
    }

    public function search(Request $request): JsonResponse
    {
        $q = $request->input('q');
        $posts = Post::where('title' , 'like' , '%' . $q . '%')->get();

        return response()->json([
            'posts' => $posts
        ]);
    }
}
