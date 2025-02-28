@extends('layouts.master')
@section('title')
    Read Post
@endsection
@section('content')
    <a href="/post/create" class="btn btn-primary my-3">Add</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Body</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($post as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->title }}</td>
                    <td>
                        <form action="/post{{ $item->id }}" method="POST">
                            <a href="/post/{$item->id}" class="btn btn-info btn-sm">Body</a>
                            <a href="/post/{{$item->$id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Tidak ada Post</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection