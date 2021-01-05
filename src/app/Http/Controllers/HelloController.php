<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\HelloController;

class HelloController extends Controller
{

public function get(Request $request){
  return view('place.test');
}




}
?>
