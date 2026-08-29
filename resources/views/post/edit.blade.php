@extends('layout')
@section('title', $post->title)
@section('content')
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Title">
        <textarea name="content" id="content" placeholder="content">{{ old('content', $post->content) }}</textarea>
        <button type="submit">Update</button>
    </form>
    <form action="{{ route('posts.destroy', $post) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection