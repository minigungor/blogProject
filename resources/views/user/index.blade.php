@extends('layout')
@section('title', 'Users list')
@section('content')
    <h1>Users List</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection