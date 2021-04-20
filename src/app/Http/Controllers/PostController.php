<?php
 namespace App\Http\Controllers;


 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;

 use App\Post;

 use App\Category;

class PostController extends Controller{





 public function create(Request $request)
 {
   $post = new Post;
   $post->name = $request->name;
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
     return response()->json(['posts'=>$posts],200);
 }

  public function edit(Request $request,$id)
 {
    $post = Post::find($id);
    return response()->json(['post'=>$post],200);
}

public function update(Request $request,$id)
{
     $post = Post::find($request->id);
    // $post->id=$request->id;
     $post->title = $request->title;
     $post->content = $request->content;
     $post->save();
     return response()->json(['post'=>$post],200);

}

public function search(Request $request)
{

  $category = Category::where('id',1)->first();
//  $category = Category::where('name',$request->name)->first();

    $posts=Post::where('category_id',$category->id)->get();

    $param = ['input'=>$request->name,'posts'=>$posts];

 return response()->json($param,200);

}
public function find(Request $request)
{
  $category = Category::all();
  return response()->json(['category'=>$category],200);
}
}
 ?>
