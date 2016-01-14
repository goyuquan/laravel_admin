@extends('layouts.app')

@section('title',$article->title)

@section('content')

<h1>
    {{$article->title}}
</h1>
<p>
    <?php echo(html_entity_decode($article->content, ENT_QUOTES, 'UTF-8')); ?>
</p>

@endsection
