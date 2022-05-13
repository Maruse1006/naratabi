<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request,$id)
    {
        Auth::user()->like(id);
        return 'ok!'; //レスポンス内容
    }

    public function destroy(Request  $request,$id)
    {
        Auth::user()->unlilikeke(id);
        return 'ok!'; //レスポンス内容
    }
}
