@extends('layout')
@section('title', $post->title)
@section('content')
    <h1>{{ $post->title }}</h1>
    <h6>{{ $post->created_at }} : {{ $post->updated_at }}</h6>
    <p>Category: 
        @if ($post->category)
            {{ $post->category->name }}
        @else
            <em>Category deleted</em>
        @endif
    </p>
    <p>Tags: 
        @forelse ($post->tags as $tag)
            {{ $tag->name }}{{ !$loop->last ? ', ' : '' }}
        @empty
            <em>No tags</em>
        @endforelse
    </p>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.index') }}">Go to posts</a>
@endsection