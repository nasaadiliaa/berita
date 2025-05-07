<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

// Route::get('/test', function () {
//     return response()->json(['message' => 'API connected!']);
// });

Route::get('/berita-terkini', [BeritaController::class, 'getTerkini']);

