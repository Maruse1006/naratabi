<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReview extends Model
{
    

    protected $fillable = [
        'id','comment','user_id',
    ];

    public function user() { // 

        return $this->belongsTo(\App\User::class, 'user_id', 'id')
            ->select('id', 'name');

    }
    public function index() { // 👈 追加

        $posts = Post::all();
        return response()->json(['posts'=>$posts],200);
    }

}
