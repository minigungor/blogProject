@extends('layout')
@section('title', $post->title)
@section('content')
    <h1>{{ $post->title }}</h1>
    <h6>{{ $post->created_at }} : {{ $post->updated_at }}</h6>
    <h6>{{ $post->category->name }}</h6>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}">Go to posts</a>
@endsection