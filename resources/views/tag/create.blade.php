@extends('layout')
@section('title', 'Create tag')

@section('content')
    <h1>Create a new tag</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Tag Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Create Tag</button>
    </form>
@endsection