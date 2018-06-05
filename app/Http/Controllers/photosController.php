<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class photosController extends Controller
{
    public function showGalleryPage()
    {
        $images = Image::get();
        $categories = $images->pluck('category')->unique();
        return view('photos', [
            "images" => $images,
            "categories" => $categories,
        ]);
    }


}
