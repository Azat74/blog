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
        <br>            {{ $post->title }}
        <br>            {{ $post->head }}
        <br>



    @endforeach
<div>


@endsection
