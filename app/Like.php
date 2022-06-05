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
}
