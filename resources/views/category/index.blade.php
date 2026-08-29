@extends('layout')
@section('title', 'Categories')
@section('content')
    @forelse ($categories as $category)
        <div class="category">
            <h3>{{ $category->name }}</h3>
        </div>
    @empty
        <p>Sorry there are no categories, but you can add <a href="{{ route('categories.create') }}">one</a>.</p>
    @endforelse
@endsection
