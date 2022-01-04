<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReview extends Model
{
    public function user() { // 👈 追加

        return $this->belongsTo(\App\User::class, 'user_id', 'id')
            ->select('id', 'name');

    }
    public function index() { // 👈 追加

        $posts = Post::all();
        return response()->json(['posts'=>$posts],200);
    }

}
