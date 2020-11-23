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
}


?>
