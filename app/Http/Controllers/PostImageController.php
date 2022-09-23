<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

use App\Post;

 use App\Category;

 use App\Image;

 use App\Like;

 //use App\User;

 use App\User;

 use Illuminate\Support\Facades\Auth;

 //use Intervention\Image\ImageManagerStatic as Image; 



class PostImageController extends Controller
{
    public function s3(Request $request)
    {
        $user = Auth::user();
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
     // if (Auth::check()) {
       $images= Image::all();
       //$user = Auth::user();
       //\Log::info($user);
       $userId = Auth::id();
       //$userI= $request->id;
    //    $conut = Image::withCount(['likes' => function ($query) use ($id) {
    //    $query->where('id', $id);
    //    }])->get();
     //  $images= Image::withCount('likes')->take(5)->get();
       $images=Image::withCount('likes')->withCount(['likes as isLike' => function ($query) use ($userId) {
            $query->where('users.id', $userId);     
       }])->get();
    //$img=Image::withCount('likes')->take(5)->get();
       return response()->json(compact('images'),200);
       
    // }else{
    //     return('/show');
    
    // }
}
public function showup(Request $request)
{
 
   $images= Image::all();

   $images=Image::withCount('likes')->take(5)->get();
    

   return response()->json(compact('images'),200);
}
    public function store($postId)
    {
        Auth::user()->like($postId);
        return 'ok!'; //レスポンス内容
    }

    public function destroy($postId)
    {
        Auth::user()->unlilikeke($postId);
        return 'ok!'; //レスポンス内容
    }
}

