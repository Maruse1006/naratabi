<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Image;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Log;

class LikeController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $posts = Post::withCount(['comments' => function ($query) use ($userId) {
        $query->where('id', $userId);
        }])->get();
    }

    public function store($imageId)
    {
        Auth::user()->like($imageId);
        return 'ok!'; //レスポンス内容
    }

}

