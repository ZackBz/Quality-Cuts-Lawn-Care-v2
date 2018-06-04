<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;
use App\Image as Upload;

class uploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function upload(Request $r)
    {
        $r->validate([
            "images" => 'required',
            "caption" => 'required',
            "category" => 'required'
        ]);

        $files = $r->file('images');
        foreach($files as $file) {
            $image = Image::make($file);
            $path = $file->hashName("thumbnails");
            $image->resize(500,null,function ($constraint) {
                $constraint->aspectRatio();
            });
            Storage::disk("s3")->getDriver()->put($path, (string) $image->encode(), [
                "visibility"=>"public",
            ]);
            $upload = new Upload;
            $upload->captions = $r->caption;
            $upload->url = Storage::cloud()->url($path);
            $upload->category = $r->category;
            $upload->save();
        }

        return redirect("/upload");
    }

    public function uploadTest()
    {
        return view('upload');
    }
}
