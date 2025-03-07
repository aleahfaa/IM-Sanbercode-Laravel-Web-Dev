@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book List</h1>
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
