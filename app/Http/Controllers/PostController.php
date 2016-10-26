<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;


class PostController extends Controller
{
    public function index(){
        $posts = App\Post::all();


        return view('index', compact('posts'));
    }

    public function note($id){

        $post = App\Post::find($id);

        return view('notes.index',compact('post'));
    }
}
