<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() { return response()->json(Book::all()); }
    public function show($id) {
        $book = Book::find($id);
        return $book ? response()->json($book) : response()->json(['message' => 'Book not found'], 404);
    }
    public function store(Request $r) { return response()->json(Book::create($r->all()), 201); }
    public function update(Request $r, $id) {
        $book = Book::find($id);
        if(!$book) return response()->json(['message' => 'Book not found'], 404);
        $book->update($r->all());
        return response()->json($book);
    }
    public function destroy($id) {
        $book = Book::find($id);
        if(!$book) return response()->json(['message' => 'Book not found'], 404);
        $book->delete();
        return response()->json(['message' => 'Book deleted']);
    }
}
