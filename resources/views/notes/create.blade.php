@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Создать статью</h1>
        @if(count($errors)>0)

            <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                @endforeach
            </ul>


        @endif
        <form action="/" method="POST">
            {{csrf_field()}}


            <div class="form-group">
                <label for="title">Название</label>
                <input class="form-control" name="title" type="text">
                <label for="head">Превью статьи</label>
                <input class="form-control" name="head" type="text">
                <label for="body">Текст статьи</label>
                <input class="form-control" name="body" type="text">
                <input type="hidden" name="author" value="{{Auth::user()->name}}">




            </div>

            <input class="btn btn-primary" type="submit" value="Done">

            </input>

        </form>
    </div>
@endsection