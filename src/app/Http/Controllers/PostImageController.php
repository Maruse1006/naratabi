<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

use App\Post;

 use App\Category;

 use App\Image;



class PostImageController extends Controller
{
    public function s3(Request $request)
    {
     
        $disk = Storage::disk('s3');
      
        $image = $request->image;

    
        $path = $disk->putFile('images', $image,'public');

        $image =new Image();

        $image->title = $request->title;

        $image->path = Storage::disk('s3')->url($path);
        $image->save();

        

        return response()->json(['response'=>$path],200);
    }

    public function show(Request $request)
    {
       $images= Image::all();
       

        return response()->json(['images'=>$images],200);

    }
}

