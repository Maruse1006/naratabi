<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Hash;

use Storage;

use Illuminate\Support\Facades\Auth;





class RegisterController extends Controller
{
    public function register(Request $request)
 {
  
  $user = new User();
  $disk = Storage::disk('s3');
  $image = $request->image; 
  $path = $disk->putFile('images', $image,'public');  
  $user->path = Storage::disk('s3')->url($path);
//   $user->path=$path;
   $user->name = $request->name;
   $user->email= $request->email;
   $user->password =Hash::make($request->password);
   
   $user->save();
   
   
   return response()->json(['response'=>$user],200);
   
   
}
}