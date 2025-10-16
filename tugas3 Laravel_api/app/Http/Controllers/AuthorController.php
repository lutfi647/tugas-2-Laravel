<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() { return response()->json(Author::all()); }
    public function show($id) {
        $author = Author::find($id);
        return $author ? response()->json($author) : response()->json(['message' => 'Author not found'], 404);
    }
    public function store(Request $r) { return response()->json(Author::create($r->all()), 201); }
    public function update(Request $r, $id) {
        $author = Author::find($id);
        if(!$author) return response()->json(['message' => 'Author not found'], 404);
        $author->update($r->all());
        return response()->json($author);
    }
    public function destroy($id) {
        $author = Author::find($id);
        if(!$author) return response()->json(['message' => 'Author not found'], 404);
        $author->delete();
        return response()->json(['message' => 'Author deleted']);
    }
}
