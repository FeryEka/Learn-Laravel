<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $accessKey = 'mPgMvDe-_G-1axz4FGSwx8LShOYr9Pr7B9NK787dAGE';
        $url = 'https://api.unsplash.com/photos/random?query=$category&w=1200&h=400';
        $imageURL = '';

        $response = Http::withHeaders([
            'Authorization' => 'Client-ID ' . $accessKey,
        ])->get($url);

        if ($response->successful()) {
            $data = $response->json();
            $imageURL = $data['urls']['regular'];
        } else {
            // Handle error
            return view('error');
        }

        return view('posts', [
            "title" => "All Post",
            "imageURL" => $imageURL,
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
            ]);
    }
}
