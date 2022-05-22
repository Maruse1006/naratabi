<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
 {
  // $user =User::create([
  //   "name" => $request->name,
  //   "email" => $request->email,
  //   "password" => Hash::make('password'),
  //    ]);
  $user = new User;
  $user->name = $request->name;
  $user->email= $request->email;
  $user->password =Hash::make($request->password);
  $user->save();
  return response()->json(['user'=>$user],200);
   }
}
