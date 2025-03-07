<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create() {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
            'genre_id' => 'required|exist:genres,id',
        ]);
        $book = new Book;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->genre_id = $request->genre_id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/books', 'public');
            $book->image = $imagePath;
        }
        $book->save();
        return redirect()->route('books.index');
    }
}
