

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
 <div class="main">
 <img src="{{asset('img/daibutsu.jpg')}}" />

 <div class="title">
 <p1>詳細ページ</p>
 </div>
  <div class="box">
   <p>{{$items->place}}<p>
  </div>
</div>

 </form>
 </body>
</html>

<style>
.main img{
  position:absolute;
  height:120px;
  width:235%;
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
  margin-left: auto;
  align-items: center;
}
.title{
  z-index:20;
  top:30px;
  color:#FFFFFF;

}

</style>
<scrpt>

</scrpt>
