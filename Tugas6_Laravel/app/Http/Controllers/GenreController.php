<?php
namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;
class GenreController extends Controller
{
    public function index() { return response()->json(Genre::all(),200); }
    public function store(Request $request) {
        $validated = $request->validate(['name'=>'required|string|max:255']);
        $g = Genre::create($validated);
        return response()->json($g,201);
    }
    public function show($id) {
        $g = Genre::find($id);
        if (!$g) return response()->json(['message'=>'Genre not found'],404);
        return response()->json($g,200);
    }
    public function update(Request $request,$id) {
        $g = Genre::find($id);
        if (!$g) return response()->json(['message'=>'Genre not found'],404);
        $validated = $request->validate(['name'=>'required|string|max:255']);
        $g->update($validated);
        return response()->json($g,200);
    }
    public function destroy($id) {
        $g = Genre::find($id);
        if (!$g) return response()->json(['message'=>'Genre not found'],404);
        $g->delete();
        return response()->json(['message'=>'Genre deleted'],200);
    }
}
