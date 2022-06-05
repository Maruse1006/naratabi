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
    return $this->hasMany(App\Like);
  }
}
