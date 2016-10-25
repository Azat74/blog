<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;

class PostController extends Controller
{
    public function index(){
        $posts = App\Post::all();

        $test = 123;
        return view('post', compact('posts'));
    }

}
