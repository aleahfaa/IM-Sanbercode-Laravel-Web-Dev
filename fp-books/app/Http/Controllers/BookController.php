<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('genre')->get();
        return view('books.index', compact('books'));
    }
    public function create()
    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);
        $imagePath = $request->file('image') ? $request->file('image')->store('books') : null;
        Book::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'genre_id' => $validated['genre_id'],
            'image' => $imagePath,
        ]);
        return redirect()->route('books.index');
    }
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
    public function edit(Book $book)
    {
        $genres = Genre::all();
        return view('books.edit', compact('book', 'genres'));
    }
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = $request->file('image') ? $request->file('image')->store('books') : $book->image;
        $book->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'genre_id' => $validated['genre_id'],
            'image' => $imagePath,
        ]);
        return redirect()->route('books.index');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
