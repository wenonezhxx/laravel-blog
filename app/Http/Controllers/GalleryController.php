<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Image::orderBy('id')->get();
        // Временно для отладки:
        // dd($images);
        return view('static.gallery', compact('images'));
    }
}
