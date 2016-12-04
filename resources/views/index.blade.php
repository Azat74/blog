@extends('layouts.app')
@section('content')



{{dump(Session::all())}}

<!-- вывод статей -->
@if(Auth::guest())
    <a href="/login">Войдите чтобы добавлять статьи</a>
    @else
    <a href="/note/create">Добавить запись</a>
    @endif
<div>@foreach($posts as $post)
        <a href="/note/{{$post->id}}">{{ $post->id }}</a>
        <form action="/note/{{$post->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
            <br>            {{ $post->title }}
            <br>            {{ $post->head }}
            <br>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-sm btn-danger" type="submit" value="Удалить">
            </input>
            <hr>
        </form>






    @endforeach
</div>



@endsection
