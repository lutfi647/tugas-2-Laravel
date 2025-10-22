<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

// Public: register & login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function(){
    // Authenticated users can create, update, and view
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);

    // Admin only: list all & delete
    Route::middleware('admin')->group(function(){
        Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
        Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
    });

    // logout
    Route::post('/logout', [AuthController::class, 'logout']);
});
