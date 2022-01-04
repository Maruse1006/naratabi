<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function reviews() { // 👈 追加

        return $this->hasMany(\App\PosReview::class, 'post_id', 'id');

    }
}
