<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
    public function getTerkini()
    {
        return response()->json(News::latest()->take(5)->get());
    }
}
