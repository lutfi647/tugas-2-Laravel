<?php
namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;
class GenreController extends Controller
{
    public function index(){ return response()->json(Genre::all()); }
    public function store(Request $request){ $request->validate(['name'=>'required']); $g=Genre::create($request->only('name')); return response()->json($g,201); }
}
