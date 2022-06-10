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
        // $like = new Like;
        // // $like->users()->attach(Auth::id());
        //  Log::info($like);
        // $like->user_id= Auth::id();
        // $like->image_id = $request->image_id;
        // $like->save();
        // return response()->json(['like'=>$like],200);
        // $count = $like->users()->count(); 
        // return response()->json([
        //     'count' => $count, 
        // ]);
        // $user= Auth::user();
        // $defaultLiked=$request->where('user_id',$user->id)->first();
        // if(conut($defaultLiked)==0){
        //     $defaultLiked == fault;
        // }else{
        //     $defaultLiked == true;
        // }

        // $id = Auth::user()->id;
       // $image_id = $request->id;
        $like = new Like;
        // $image = Image::findOrFail($image_id);
        $user=Auth::user();
      //  $image = Image::where('id',$image_id)->first();
        $like = Like::where('image_id', $id)->where('user_id',$user->id)->first();

        // 空でない（既にいいねしている）なら
        if (!$like) {
            //likesテーブルのレコードを削除
    //         $user=Auth::user();
    //         $image = Image::where('id',1)->first();
    //    // $like = Like::where('image_id', $image->id)->where('user_id',$user)->first();
    //         $like = Like::where('image_id', $id)->where('user_id',$user->id)->first();
    //         Log::info($like);
    //         $like->delete();

            Like::create([
                'image_id' => $id,
                'user_id' => Auth::id(),
                ]);
            } else {
                // $user=Auth::user();
                // $image = Image::where('id',1)->first();
           // $like = Like::where('image_id', $image->id)->where('user_id',$user)->first();
               // $like = Like::where('image_id', $id)->where('user_id',$user->id)->first();
                Log::info($like);
                $like->delete();
            //空（まだ「いいね」していない）ならlikesテーブルに新しいレコードを作成する
        //        Like::create([
        //       'image_id' => $id,
        //       'user_id' => Auth::id(),
        //   ]);
        //    Like::create([
        //       'image_id' => $id,
        //       'user_id' => Auth::id(),
        //   ]);
        //$likeCount=count(Like::where('image_id',$id)->get());
    }
    }
    // public function destroy(Request  $request,$id)
    // {
    //     $user=Auth::user();
    //     $image = Image::where('id',1)->first();
    //    // $like = Like::where('image_id', $image->id)->where('user_id',$user)->first();
    //     $like = Like::where('image_id', $id)->where('user_id',$user->id)->first();
    //     Log::info($like);
    //     $like->delete();
    //     session()->flash('success', 'You Unliked the Reply.');
    //    // return redirect()->back();
    // }

    
}
