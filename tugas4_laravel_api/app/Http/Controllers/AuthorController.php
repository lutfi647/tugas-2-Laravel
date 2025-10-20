<?php
namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
class AuthorController extends Controller
{
    public function index(){ return response()->json(Author::all()); }
    public function store(Request $request){ $request->validate(['name'=>'required']); $a=Author::create($request->only('name','country')); return response()->json($a,201); }
}
