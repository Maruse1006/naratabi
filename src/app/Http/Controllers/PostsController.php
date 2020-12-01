<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

public function index(Request $request)
{
  $items = $request->input("items");

  $query= User::query();

  if(!empty($items)){
    $query->where('summary','like','%'.$items.'%');
  }
  //showメソッドを追加
  //public function show(Request $request,$id){
    //$post = Post::find0rFail($id);
    //return view('place.show',['post'=>$post]);
  //}
}
?>
