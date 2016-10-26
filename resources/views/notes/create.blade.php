@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Создать статью</h1>

        <form action="/" method="POST">
            {{csrf_field()}}


            <div class="form-group">
                <label for="name">Название</label>
                <input class="form-control" name="title" type="text">
                <label for="name">Превью статьи</label>
                <input class="form-control" name="head" type="text">
                <label for="name">Текст статьи</label>
                <input class="form-control" name="body" type="text">
                <input class="form-control" name="author" type="text">


            </div>

            <input class="btn btn-primary" type="submit" value="Done">

            </input>

        </form>
    </div>
@endsection