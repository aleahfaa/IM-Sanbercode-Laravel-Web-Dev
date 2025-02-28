@extends('layouts.master')
@section('title')
    Edit Post
@endsection
@section('content')
    <form action="/post/{{ $post->id }}" method="POST">
        @method('PUT')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $post->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea name="body" class="form-control" cols="'30" rows="10">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection