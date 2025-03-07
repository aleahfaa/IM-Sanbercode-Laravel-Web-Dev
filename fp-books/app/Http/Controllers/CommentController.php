<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $bookId) {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);
        $book = Book::findOrFail($bookId);
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->book_id = $book->id;
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect()->route('books.show', $bookId)->with('success', 'Comment added');
    }
}
