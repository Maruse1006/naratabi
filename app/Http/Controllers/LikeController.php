<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Image;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Log;

class LikeController extends Controller
{
    // public function store(Request $request,$id)
    // {
       
    // //     $like = new Like;
    // //     $user=Auth::user();
    // //   //  $image = Image::where('id',$image_id)->first();
    // //     $like = Like::where('image_id', $id)->where('user_id',$user->id)->first();

    // //     // 空でない（既にいいねしている）なら
    // //     if (!$like) {

    // //         Like::create([
    // //             'image_id' => $id,
    // //             'user_id' => Auth::id(),
    // //             ]);
    // //         } else {
    
    // //             Log::info($like);
    // //             $like->delete();
    
       
    // }
    // }

    public function store($imageId)
    {
        Auth::user()->like($imageId);
        return 'ok!'; //レスポンス内容
    }

}

