<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();


        return view('index', compact('posts'));
    }

    public function note($id){

        $post = Post::find($id);

        return view('notes.index',compact('post'));
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){

        $dataInput = $request->all();
//        $user = Auth::user();
//        $user->posts()->create($dataInput);
        Post::create($dataInput);

        return redirect('/');
    }
}
