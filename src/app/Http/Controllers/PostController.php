<?php
 namespace App\Http\Controllers;


 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;

 use App\Post;

class PostController extends Controller{
 // // public function index(Request $request)
 // {
 //   $items = $request->input("items");
 //
 //   $query= User::query();
 //
 //  if(!empty($items)){
 //   $query->where('summary','like','%'.$items.'%');
 //   }
 // }
 public function index()
 {
   return Post::all();
 }


 /*public function index(Request $request)
 {
   return Post::create($request->all());
 }
*/
 // public function store(Request $request)
 // {
 //   return Post::create($request->all());
 // }
 public function show($id)
 {
   return Post::find($id);
 }
 public function update(Request $request,$id)
 {
    $post = Post::find($id);
    $post->update($request->all());
    return $post;
 }
 public function destroy($id)
 {
   return Post::destory($id);
 }

 public function find(Request $request)
 {
    return ['input' =>''];
 }

 // public function index()
 // {
 //   $posts = Post::all();
 //   return response()->json(['posts'=>$posts],200);
 // }
 //
 //
 public function store(Request $request)
 {
    $title=$request->title;
    return response()->json(['posts'=>$title],200);
 }
}
 ?>
