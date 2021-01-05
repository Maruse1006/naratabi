<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts_table';

  protected $fillable = [
    'title',
    'slug',
    'likes',
    'content',
  ];

}
