@extends('layout')
@section('title', 'Edit Category')
@section('content')
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ old('name', $category->name) }}" placeholder="Category Name">
        <button type="submit">Update</button>
    </form>
    <form action="{{ route('categories.destroy', $category) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection