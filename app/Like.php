<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['image_id','user_id'];

    public function image()
  {
    return $this->belongsTo(Image::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function like(Request $request,$id)
  {
    $exist = Like::where('image_id', $image->id)->where('user_id',$user->id)->get();
    if (!$exist->isEmpty()) {
        return true;
    } else {
    // レコード（$exist）が存在しないなら
        return false;
    }
}

  
}

  
