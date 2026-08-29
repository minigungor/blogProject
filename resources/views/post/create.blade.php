@extends('layout')
@section('title', 'Create Post')
@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" id="content" placeholder="content"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection