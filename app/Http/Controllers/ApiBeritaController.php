<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class ApiBeritaController extends Controller
{
    public function byKategori($slug)
    {
        // Ambil semua berita dengan kategori tertentu
        $berita = News::with('author')->whereHas('newsCategory', function($query) use ($slug) {
            $query->where('slug', $slug);
        })->latest()->get();

        // Tambahkan URL lengkap ke thumbnail
        $berita->transform(function ($item) {
            $item->thumbnail = url('storage/' . $item->thumbnail);
            return $item;
        });

        return response()->json($berita);
    }
}
