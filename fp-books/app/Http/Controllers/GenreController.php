<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }
    public function create()
    {
        return view('genres.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Genre::create($validated);
        return redirect()->route('genres.index')->with('success', 'Genre berhasil dibuat');
    }
    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }
    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }
    public function update(Request $request, Genre $genre)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $genre->update($validated);
        return redirect()->route('genres.index')->with('success', 'Genre berhasil diperbarui');
    }
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index')->with('success', 'Genre berhasil dihapus');
    }
}
