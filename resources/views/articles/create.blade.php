@extends('layouts.app')

@section('content')

@include('includes.upload')
<form method="POST" action="/article/store" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="title" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <strong>{{ $errors->first('title') }}</strong>
    @endif
    <br>

    <input type="date" name="publish_at" value="{{ old('publish_at') }}">
    @if ($errors->has('publish_at'))
    <strong>{{ $errors->first('publish_at') }}</strong>
    @endif
    <br>

    <button type="button" id="upload_bt" class="mini negative ui button">图片上传</button>
    <input type="hidden" name="photo">
    <br>

    <textarea name="content" rows="8" cols="40">{{ old('content') }}</textarea>
    @if ($errors->has('content'))
    <strong>{{ $errors->first('content') }}</strong>
    @endif
    <br>
    <br>
    <input type="submit" id="submit" value="submit">

</form>


@endsection

@section('script')
<script src="/js/upload.js"></script>
@endsection
