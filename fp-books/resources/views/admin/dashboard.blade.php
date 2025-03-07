@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, Admin! Here you can manage the content.</p>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Create Book</a>
    <a href="{{ route('genres.create') }}" class="btn btn-secondary">Create Genre</a>
</div>
@endsection
