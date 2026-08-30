@extends('layout')
@section('title', $category->name)
@section('content')
    <h1>{{ $category->name }}</h1>
    <a href="{{ route('categories.edit', $category) }}">Edit</a>
    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <h2>Posts in this category:</h2>
    @forelse ($category->posts as $post)
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </div>
    @empty
        <p>No posts in this category.</p>
    @endforelse
@endsection 