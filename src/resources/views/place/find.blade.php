<!DOCTYPE html>
  <html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="style.css" type="text/css" href="css/stylesheet.css">
</head>
<header>
    なら旅net
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
  </header>
 <div class="img">
 <img src="{{asset('img/daibutsu.jpg')}}" style/>
</div>
 <div class="title">
 <p1>神社・寺の詳細結果</p>
 </div>
 <form action="/place/find" method="post">
  {{csrf_field()}}

 </form>

 @if(isset($items))

 <div class="content">
   @foreach($items as $item )
   <div class="box">
    <div class="block">
      <!--action() コントローラーとメソッドを指定する記述
      （Postsコントローラーのshowメソッド）
    -->
    <!--<li><a href="{{action('PostConroller@show,$post->id')}}">{{$post->title}}</a></li>-->
    <p><a href="{{action('PostsController@show',$post->id)}}" >詳細</a></p>
     <span>{{$item->place}}</span><br />
    　  <img src="{{$item->img_url}}"  />
    </div>
    　　<br/>
  　　　　</br/>
    　概要<br/>
   　　{{$item->summary}}
   </div>
   @endforeach
 </div>
 @endif
<style>
.
.content{

}
.content div{

}
header{
  background-color:#000000;
  color:#FFFFFF;
  width:605px;
  height:40px;
  position:relative;
}

.title{
  position:absolute;
  top:90%;
  left:70%;
  color:#F4F5FA;
}

}
.box{
  width:40%;
  justify-content: space-between
  padding:40px;
}
span{
  color:##99CC33;
}
.box img{
  height:100px;
  margin:auto;
  margin-top:20px;
}
.block{
  display:block;
  text-align: center;
}
</style>

@section('footer')
copyright
@endsection
