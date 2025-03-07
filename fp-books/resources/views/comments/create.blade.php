@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Leave a Comment</h3>
    <form action="{{ route('comments.store', $book->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="comment" id="comment" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>
</div>
@endsection
