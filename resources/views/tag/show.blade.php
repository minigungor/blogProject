@extends('layout')
@section('title', 'Tag Details')

@section('content')
    <h1>Tag: {{ $tag->name }}</h1>
    @forelse ($tag->posts as $post)
        <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
    @empty
        <p>No posts found for this tag.</p>
    @endforelse
@endsection