<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
    public function getTerkini()
{
    $news = News::latest()->take(5)->get();

    $news->transform(function ($item) {
        // sesuaikan jika file disimpan di public/storage
        $item->thumbnail = url('storage/' . $item->thumbnail);
        return $item;
    });

    return response()->json($news);
}

public function show($slug)
{
    $berita = News::where('slug', $slug)->firstOrFail();

    // Tambahkan URL storage ke field thumbnail
    $berita->thumbnail = url('storage/' . $berita->thumbnail);

    return response()->json($berita);
}
}
