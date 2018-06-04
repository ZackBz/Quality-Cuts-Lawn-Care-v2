<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;
use App\Image as Upload;

class testController extends Controller
{
    public function test(Request $r)
    {
        $r->validate([
            "images" => 'required'
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
                "x-amz-meta-caption"=>"qualitycutslawncare"
            ]);
            $upload = new Upload;
            $upload->captions = "This is a caption";
            $upload->url = Storage::cloud()->url($path);
            $upload->category = "Snow";
            $upload->save();
        }

        return back();
    }

    public function showTest()
    {
        // $images = [];
        // foreach(Storage::files('thumbnails') as $image) {
        //     array_push($images, [
        //         "image" => Storage::cloud()->url($image),
        //         "headers" => get_headers(Storage::cloud()->url($image)),
        //     ]);
        // }
        // dd($images);

        return view('test');
    }
}
