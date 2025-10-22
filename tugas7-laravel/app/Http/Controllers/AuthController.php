<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $r){
        $r->validate(['name'=>'required','email'=>'required|email|unique:users','password'=>'required']);
        $user = User::create(['name'=>$r->name,'email'=>$r->email,'password'=>Hash::make($r->password),'role'=>$r->role ?? 'mahasiswa']);
        return response()->json($user,201);
    }
    public function login(Request $r){
        $r->validate(['email'=>'required|email','password'=>'required']);
        $user = User::where('email',$r->email)->first();
        if (!$user || !Hash::check($r->password,$user->password)) return response()->json(['message'=>'Invalid credentials'],401);
        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json(['token'=>$token,'user'=>$user]);
    }
    public function logout(Request $r){
        $r->user()->currentAccessToken()->delete();
        return response()->json(['message'=>'Logged out']);
    }
}
