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
 <img src="{{asset('img/daibutsu.jpg')}}" style/>
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
    {{$item->place}}<br />
    <img src="{{$item->img_url}}"  />
    <br/>
  </br/>
    概要<br/>
   {{$item->summary}}

  </div>
  
   @endforeach
 </div>
 @endif
<style>
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
  top:90px;
  left:70px;
  color:#F4F5FA;
}


}
.box{
  width:40%;
  justify-content: space-between

}
.box div{
  display:flex;

}
.box img{
  height:100px;
}
</style>

@section('footer')
copyright
@endsection
