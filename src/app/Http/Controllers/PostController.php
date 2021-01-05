<?php
 namespace App\Http\Controllers;


 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;

 use App\Post;

class PostConroller extends Controller{
/* public function index(Request $request)
 {
   $items = $request->input("items");

   $query= User::query();

  if(!empty($items)){
   $query->where('summary','like','%'.$items.'%');
   }
 }

}
*/
 public function index(Request $request)
 {
   return Post::create($request->all());
 }

 public function store(Request $request)
 {
   return Post::create($request->all());
 }
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

}
 ?>
