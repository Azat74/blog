@extends('layouts.app')
@section('content')





{{$post->id}}<br><hr>
{{ $post->title }}<br><hr>
{{ $post->head }}<br><hr>
{{ $post->body }}<br><hr>
{{ $post->author }}<br><hr>


<div align="center"> {{ $post->created_at }}<br><hr>
                     {{ $post->updated_at }}<br><hr>
</div>

@endsection