<?php
 namespace App\Http\Controllers;


 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;

 use App\Post;

class PostController extends Controller{

 public function index()
  {
    return Post::all();
  }




 public function find()
 {
    return ['input' =>''];
 }


 public function create(Request $request)
 {
   $post = new Post;
   $post->title = $request->title;
   $post->content = $request->content;
   $post->save();
    // $param = [
    //   'title'=>$request->title,
    //   'content'=>$request->content,
    // ];
    //   DB::table('posts')->insert($param);
    return response()->json(['posts'=>$post],200);
 }

 public function delete(Request $request,$id)
 {
     $post = Post::findOrFail($id);
     $post->delete();
     //return response()->json(['posts'=>$posts],200);
 }

  public function edit(Request $request)
 {
    $post = Post::find($request->id);
}

public function update(Request $request,$id)
{
    $post = post::find($request->id);
    $post->id=$request->id;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();
}
}
 ?>
