@extends('layout')
@section('title', 'Create Category')
@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="category name"">
        <button type="submit">Create</button>
    </form>
@endsection