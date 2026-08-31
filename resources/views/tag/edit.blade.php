@extends('layout')
@section('title', 'Tag edit')

@section('content')
    <h1>Edit tag: {{ $tag->name }}</h1>

    <form action="{{ route('tags.update', $tag) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Tag Name:</label>
            <input type="text" id="name" name="name" value="{{ $tag->name }}" required>
        </div>
        <button type="submit">Update Tag</button>
    </form>
    <form action="{{ route('tags.destroy', $tag) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Tag</button>
    </form>
@endsection