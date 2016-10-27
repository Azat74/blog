<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;
use DB;
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
        $this->validate($request,[
            'title'=>'required|max:10',
            'head' =>'required|min:10',
            'body' =>'required|min:10'
        ]);



        $dataInput = $request->all();
        $user = Auth::user();

        $user->posts()->create($dataInput);
//        Post::create($dataInput);         /*разные способы добавления записи в БД*/
//        DB::table('posts')->insert(       /*разные способы добавления записи в БД*/
//            array($dataInput));
        return redirect('/');
    }




}
