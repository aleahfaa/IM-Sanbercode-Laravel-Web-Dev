@extends('layouts.master')
@section('title')
    Detail Post
@endsection
@section('content')
<h1 class="text-primary">{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<a href="/post" class="btn btn-secondary btn-sm">Kembali</a>

@endsection