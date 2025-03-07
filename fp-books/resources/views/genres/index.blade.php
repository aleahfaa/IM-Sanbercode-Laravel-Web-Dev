@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Genre List</h1>
    <ul class="list-group">
        @foreach ($genres as $genre)
            <li class="list-group-item">
                <a href="{{ route('genres.show', $genre->id) }}">{{ $genre->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
