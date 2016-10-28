@extends('layouts.app')
@section('content')





<!-- вывод статей -->
@if(Auth::guest())
    <a href="/login">Войдите чтобы добавлять статьи</a>
    @else
    <a href="/note/create">Добавить запись</a>
    @endif
<div>@foreach($posts as $post)
        <a href="/note/{{$post->id}}">{{ $post->id }}</a>
        <form action="/note/{{$post->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
            </input>
        </form>

        <br>            {{ $post->title }}
        <br>            {{ $post->head }}
        <br>



    @endforeach
<div>


@endsection
