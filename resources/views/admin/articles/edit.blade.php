@extends('layouts.app')

@section('content')

<form method="POST" action="/article/{{$article->id}}/update">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="title" value="{{$article->title}}">
    @if ($errors->has('title'))
    <strong>{{ $errors->first('title') }}</strong>
    @endif
    <br>

    <textarea name="content" rows="8" cols="40">{{ old('content') }}{{$article->content}}</textarea>
    @if ($errors->has('content'))
    <strong>{{ $errors->first('content') }}</strong>
    @endif
    <br>

    <input type="submit" value="submit">

</form>

@endsection
