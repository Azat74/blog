@extends('layouts.app')
@section('content')





<!-- вывод статей -->

<div>@foreach($posts as $post)
        <a href="/note/{{$post->id}}">{{ $post->id }}</a>
        <br>            {{ $post->title }}
        <br>            {{ $post->head }}
        <br>



    @endforeach
<div>


@endsection
