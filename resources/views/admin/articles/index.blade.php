@extends('layouts.app')

@section('title','标题')

@section('content')
<!-- Create article Form... -->

<!-- Current articles -->
@if (count($articles) > 0)

@if (Auth::check())
<a href="/article/create">create</a>
@endif


@foreach ($articles as $article)
<div>
    @if($article->thumbnail)
    <img src="{{asset('uploads/'.$article->thumbnail)}}" alt="" />
    @endif
    <a href="/article/{{$article->id}}">{{ $article->title }}</a>
    <a href="/article/{{$article->id}}/edit">编辑</a>
    <a href="/article/{{$article->id}}/destroy">DELETE</a>
</div>

@endforeach

<p>
    {!! $articles->links() !!}
</p>
@endif
@endsection
