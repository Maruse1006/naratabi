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
 <img src="{{asset('img/daibutsu.jpg')}}" width="100%" height="150"  />
</div>
 <div class="title">
 <p>神社・寺の詳細結果</p>
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
      class="btn btn-primary btn-primary btn-sm">
      <span>{{$item->place}}</span><tr/></a></p>
       <img src="{{$item->img_url}}"  />
    </div>
   @endforeach
 </div>
</div>


 @endif
 @section('footer')
 copyright
 @endsection
<style>

.content{

}

header{
  background-color:#000000;
  color:#FFFFFF;
  width:100%;
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
  width:100%;
  justify-content: space-between
  padding:40px;
}
span{
  color:##99CC33;
}
.img{
  display: block;
  text-align: center;
  width:100%;
}

.box img{
  height:100px;
  margin:auto;
  margin-top:20px;
}
.block{
  display:block;
  text-align: center;
  width:50%;
  float:left;
}
p{
  top:10%;
}
</style>
