<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ApiBeritaController;
use App\Http\Controllers\AuthorController;

// Route::get('/test', function () {
//     return response()->json(['message' => 'API connected!']);
// });

Route::get('/berita-terkini', [BeritaController::class, 'getTerkini']);
Route::get('/kategori/{slug}', [ApiBeritaController::class, 'byKategori']);
Route::get('/author/{name}', [AuthorController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'show']);




