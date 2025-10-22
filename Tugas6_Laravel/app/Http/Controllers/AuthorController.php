<?php
namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
class AuthorController extends Controller
{
    public function index() { return response()->json(Author::all(),200); }
    public function store(Request $request) {
        $validated = $request->validate(['name'=>'required|string|max:255','country'=>'nullable|string|max:255']);
        $a = Author::create($validated);
        return response()->json($a,201);
    }
    public function show($id) {
        $a = Author::find($id);
        if (!$a) return response()->json(['message'=>'Author not found'],404);
        return response()->json($a,200);
    }
    public function update(Request $request,$id) {
        $a = Author::find($id);
        if (!$a) return response()->json(['message'=>'Author not found'],404);
        $validated = $request->validate(['name'=>'required|string|max:255','country'=>'nullable|string|max:255']);
        $a->update($validated);
        return response()->json($a,200);
    }
    public function destroy($id) {
        $a = Author::find($id);
        if (!$a) return response()->json(['message'=>'Author not found'],404);
        $a->delete();
        return response()->json(['message'=>'Author deleted'],200);
    }
}
