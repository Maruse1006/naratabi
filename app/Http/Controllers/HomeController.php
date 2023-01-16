<?php
 namespace App\Http\Controllers;


 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;

 use Illuminate\Support\Facades\Storage;

 use Illuminate\Support\Facades\Auth;


 use App\Post;

 use App\Category;

 use App\Photo;

 use stdClass;

 use App\Postreview;

 use App\User;

 use App\Home;

 use Hash;

 use Log;

 //use App\Post_review;

 //use App\Post_review;

 

 //use App\Post;
 

 //use storage;

 // 現在認証しているユーザーを取得
$user = Auth::user();

// 現在認証しているユーザーのIDを取得
$id = Auth::id();

 

class HomeController extends Controller{

    public function index(Request $request)
    {
     
      $category = Category::all();
      \Log::info($category);
      //$user = $request->id;
      $user = Auth::user();
      //$user = $request->user();
      \Log::info($user);
      return response()->json(['categories'=>$category],200);
      return response()->json(['user'=>$user],200);
    }
}