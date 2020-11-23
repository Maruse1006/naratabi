<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftController extends Controller
{
  public function find(Request $request)
  {
    return view('place.gift',['input' =>'']);
  }
  public function search(Request $request)
  {
    $category = Category::where('name',$request->input)->first();

      $Gifts = Gift::where('category_id',$category['id'])->get();

    $param = ['input'=>$request->input,'items'=>$gifts];

    return view('place.gift',$param);
  }
}
