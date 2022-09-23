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
  \Log::info($path);
   // $user = new User();
//    $disk = Storage::disk('s3');
  
//   $path = $disk->putFile('images', $user,'public');   
//   \Log::info($path);   
    
   $user->name = $request->name;
   \Log::info($user->name);
   $user->email= $request->email;
   \Log::info($user->email);
   $user->password= $request->password;
   \Log::info($user->password);
   $user->path=$path;
  \Log::info($user->path);
   $user->save();
   \Log::info($user->save);
   
   return response()->json(['response'=>$user],200);
   
   
}
}