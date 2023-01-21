<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;




class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place', 'gift', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function likes()
    {
        return $this->belongsToMany('App\Image','likes','user_id','image_id')->withTimestamps();
    } 

    public function isLike($imageId)
    {
      return $this->likes()->where('image_id',$imageId)->exists();
    }
 
    public function like($imageId)
    {
      if($this->isLike($imageId)){
        //もし既に「いいね」していたら何もしない
        $this->likes()->detach($imageId);
      } else {
        $this->likes()->attach($imageId);
      }
    }   

    public function images()
    {
        return $this->hasMany('App\Image');
    }
    // public function unlike($imageId)
    // {
    //   if($this->isLike($imageId)){
    //     //もし既に「いいね」していたら消す
    //     $this->likes()->detach($imageId);
    //   } else {
    //   }
    // }
}
