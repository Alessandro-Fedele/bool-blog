@extends('layouts.default')

@section('title', "blog-boolean")

@section('main_content')
<h1>BLOG</h1>
<div class="container">
    <ul>
        @foreach ($posts as $post)
        <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>
@endsection