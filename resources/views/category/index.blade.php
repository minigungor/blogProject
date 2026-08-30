@extends('layout')
@section('title', 'Categories')
@section('content')
    @forelse ($categories as $category)
        <div class="category">
            <h3>{{ $category->name }}</h3>
            <a href="{{ route('categories.edit', $category) }}">Edit</a>
            <a href="{{ route('categories.show', $category) }}">View</a>
            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @empty
        <p>Sorry there are no categories, but you can add <a href="{{ route('categories.create') }}">one</a>.</p>
    @endforelse
@endsection
