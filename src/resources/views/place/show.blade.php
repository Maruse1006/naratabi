

<!DOCTYPE html>
  <html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    なら旅net
    <script src="{{ asset('js/hoge.js') }}"></script>
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
  </header>


   <nav id="nav">
     <ul>
       <li><a href="index.html">トップへ戻る</a></li>
       <li><a href="">今日</a></li>
       <li><a href="">今週</a></li>
       <li><a href="">週末</a></li>
       <li><a href="">今月</a></li>
       <li><a href="">このサイトについて</a></li>
     </ul>
   </nav>
 </main>


 <div class="content">
   <div class="box">
    <div class="block">

     <span>{{$items->place}}</span><br />
       <img src="{{$items->img_url}}"  />
    </div>
      <br/>
      </br/>
     概要<br/>
     {{$items->summary}}
   </div>
 </div>
 </form>
 </body>
</html>

<style>
header{
  width:50%;
}
.main img{
  position:absolute;
  height:120px;
  width:120%;
  top:40px;
  z-index: 10;
  }
}
.main {
  position:relative;
  height:100px;
  top:50px;
}
.box{
  position:relative;
  top:100px;
  display:inline;
  text-align:center;
}
.box img{
  width:50%;
  height:50%;
}
.title{
  z-index:20;
  top:30px;
  color:#FFFFFF;

}

</style>
<scrpt>

</scrpt>
