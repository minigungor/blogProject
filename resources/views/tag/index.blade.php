@extends('layout')
@section('title', 'Tags')

@section('content')
    <h1>Tags</h1>
    @if($tags->isEmpty())
        <p>No tags found. But you can <a href="{{ route('tags.create') }}">create one</a>.</p>
    @else
        <ul>
            @foreach($tags as $tag)
                <li><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }} - <a href="{{ route('tags.edit', $tag) }}">Edit</a></li>
            @endforeach
        </ul>
    @endif
@endsection