@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Редактировать статью</h1>
        @if(count($errors)>0)

            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                @endforeach
            </ul>


        @endif

        <form action="/note/{{$post->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input class="form-control" name="title" value="{{ $post->title }}">
                    <label for="head">Превью статьи</label>
                    <input class="form-control" name="head" value="{{ $post->head }}">
                    <label for="body">Текст статьи</label>
                    <input class="form-control" name="body" value="{{ $post->body }}">
                    <label for="author">Автор статьи</label>
                    <input class="form-control" name="author" value="{{$post->author}}">






                </div>



            </div>

            <input class="btn btn-primary" type="submit" value="Update">

            </input>

        </form>
    </div>
















@endsection