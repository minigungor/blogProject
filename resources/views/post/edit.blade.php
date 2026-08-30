@extends('layout')
@section('title', 'Edit Post')
@section('content')
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Title">
    <textarea name="content" placeholder="content">{{ old('content', $post->content) }}</textarea>
    <select name="category_id">
        <option value="">-- No category --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" 
                @if(old('category_id', $post->category_id) == $category->id) selected @endif>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <button type="submit">Update</button>
</form>
@endsection