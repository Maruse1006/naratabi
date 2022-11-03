<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'title',
        'path',
    ];
    public function likes()
  {
    return $this->belongsToMany('App\User','like','image_id','user_id')->withTimestamps();
  }
  public function likeCount(){
    return $this->likes()->count();
    }
}
// return $this->belongsToMany('App\Image','likes','user_id','image_id')->withTimestamps();