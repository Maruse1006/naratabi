<!DOCTYPE html>
  <html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="style.css" type="text/css" href="css/stylesheet.css">
</head>
<div class="hwrapper">
<header>
    なら旅net
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
  </header>
</div>
 <div class="img">
 <img src="{{asset('img/daibutsu.jpg')}}" width="600" height="150" />
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
    <p><a href="{{action('PlaceController@show',[$item->id])}}"
      class="btn btn-primary btn-primary btn-sm"><span>{{$item->place}}</span><br /></a></p>
  <!-- <li><a href="{{action('PlaceController@show',$item->id)}}">-->
  </tr>
       <img src="{{$item->img_url}}"  />
   </div>
   @endforeach
 </div>
</div>


 @endif
<style>
.hwrapper{
  width:100%;
}
.content{
display:flex;
flex-wrap: wrap;
}

header{
  background-color:#000000;
  margin:auto;
  max-width:800px;
  color:#FFFFFF;
  width:605px;
  height:40px;
  position:relative;
}
.span{
  color:#FFFFFF;
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
.img{
  display: block;
  text-align: center;
}

.box img{
  height:100px;
  margin:auto;
  margin-top:20px;
}
.block{
  display:block;
  text-align: center;
  display:flex;
  flex-wrap:wrap;
}
</style>

@section('footer')
copyright
@endsection
