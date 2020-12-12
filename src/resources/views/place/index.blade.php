

<!DOCTYPE html>
  <html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="hwrapper">
    <header>
    なら旅net
    <script src="{{ asset('js/hoge.js') }}"></script>
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
    </header>
  </div>
  <div class="part">
    <img src="{{ asset('img/shika.jpg') }}" style="width:100%;" />
  </div>
 <div class="title">
  <p>鹿と大仏だけじゃない奈良を知る</p>
 </div>
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
 <form action="/place/find" method="post">
  {{csrf_field()}}
<div class="search">
  <input type="text" id="input_message"  value="奈良 "name="input"style="border-radius:10px;",height="30px;" >
  <input type="submit" value="find">
</div>
 <div class="tab">
  <div class="shrine">
    <form>
     <input type="button" value="神社・寺" onClick="jinjya()" style="border-radius:30px;">
    </form>
  </div>
    <div class="souvenir">
    <form>
     <input type="button" value="お土産" onClick="miyage()" style="border-radius:30px;">
    </form>
   </div>
   <div class="hotel">
   <form>
    <input type="button" value="宿" onClick="hotel()" style="width:80px;","border-radius:30px;">
   </form>
  </div>
 </div>
 </form>
 </body>
</html>
