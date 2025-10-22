<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    // Admin: list all
    public function index(){ return response()->json(Mahasiswa::all(),200); }

    // Show by id (accessible to authenticated users)
    public function show($id){
        $m = Mahasiswa::find($id);
        if (!$m) return response()->json(['message'=>'Mahasiswa not found'],404);
        return response()->json($m,200);
    }

    // Create (authenticated)
    public function store(Request $r){
        $r->validate(['nama'=>'required','nim'=>'required|unique:mahasiswas,nim','jurusan'=>'required','angkatan'=>'required|integer']);
        $m = Mahasiswa::create($r->only(['nama','nim','jurusan','angkatan']));
        return response()->json($m,201);
    }

    // Update (authenticated)
    public function update(Request $r,$id){
        $m = Mahasiswa::find($id);
        if (!$m) return response()->json(['message'=>'Mahasiswa not found'],404);
        $r->validate(['nama'=>'sometimes','nim'=>'sometimes|unique:mahasiswas,nim,'.$id,'jurusan'=>'sometimes','angkatan'=>'sometimes|integer']);
        $m->update($r->only(['nama','nim','jurusan','angkatan']));
        return response()->json($m,200);
    }

    // Delete (admin)
    public function destroy($id){
        $m = Mahasiswa::find($id);
        if (!$m) return response()->json(['message'=>'Mahasiswa not found'],404);
        $m->delete();
        return response()->json(['message'=>'Mahasiswa deleted'],200);
    }
}
