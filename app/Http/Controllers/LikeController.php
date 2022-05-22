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
    public function store(Request $request,$id)
    {
        $like = New Like();
       // Log::info($image);
        $like->users()->attach(Auth::id());
        $count = $like->users()->count(); //以下追加
        return response()->json([
            'count' => $count, 
        ]);
        // Auth::user()->like($iId);
        // return 'ok!'; //レスポンス内容
    }

    public function destroy(Request  $request,$id)
    {
        // $post = Image::find($id);
        // $post->users()->detach(Auth::id());
        Auth::user()->unlilikeke($Id);
        return 'ok!'; //レスポンス内容
    }
}
