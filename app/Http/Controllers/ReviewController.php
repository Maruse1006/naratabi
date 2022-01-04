<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      
        $review = new \App\PostReview();
        $review->post_id = $request->post_id;
        $review->user_id = $request->user()->id;
        $review->stars = $request->stars;
        $review->comment = $request->comment;
        $result = $review->save();
        return ['result' => $result];
       }
      
}
