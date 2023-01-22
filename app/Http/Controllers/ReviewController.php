<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postreview;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
      $posts = Post::all();
      return response()->json(['posts'=>$posts],200);
    }

    public function post(Request $request) {
        if(!auth()->check()) {
          $fail('レビューするにはログインしてください。');
          return;
      }
      
        $review = new \App\Postreview();
        $review->post_id = $request->post_id;
        $review->user_id = $request->user()->id;
        $review->username = $request->user()->name;
        $review->stars = $request->stars;
        $review->comment = $request->comment;
        $result = $review->save();
        return ['result' => $result];
       }
    
    public function list(Request $request,$id){
      $post = PostReview::find($id);
      $review=PostReview::where('post_id',$id)->get();
      //$review= PostReview::find($id);
      return response()->json(compact('review'),200);
     // return response()->json(['review'=>$review],200);
    }
      
}
