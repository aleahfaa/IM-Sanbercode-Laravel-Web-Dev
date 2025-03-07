@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $genre->name }}</h1>
    <h3>Books in this Genre:</h3>
    <ul class="list-group">
        @foreach ($genre->books as $book)
            <li class="list-group-item">
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
