@extends('layouts.app')
@section('content')





<!-- вывод статей -->

<div>@foreach($posts as $post)
        {{ $post->id }}<br>{{ $post->title }}<br>{{ $post->head }}<br>



    @endforeach
<div>


@endsection
