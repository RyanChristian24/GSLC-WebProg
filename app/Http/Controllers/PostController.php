<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //select * from Post
        $post_data = Post::all();
        return view('home', compact('post_data'));
    }
}
