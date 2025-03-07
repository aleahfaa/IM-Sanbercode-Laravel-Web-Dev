@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->description }}</p>
    <p>Genre: {{ $book->genre->name }}</p>
    <h3>Comments</h3>
    <ul class="list-group">
        @foreach ($book->comments as $comment)
            <li class="list-group-item">{{ $comment->comment }} - by {{ $comment->user->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
