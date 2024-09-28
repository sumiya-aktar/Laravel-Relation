<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;

class PostController extends Controller
{
    public function index (){
    $post = Post::with('like')->get();
    // dd($post);
    return view('post', compact('post'));
}
}