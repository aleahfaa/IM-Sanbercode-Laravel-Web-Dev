@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Book Store</h1>
    <p>This is the public homepage of the site.</p>
    <a href="{{ route('books.index') }}" class="btn btn-primary">View Books</a>
    <a href="{{ route('genres.index') }}" class="btn btn-secondary">View Genres</a>
</div>
@endsection