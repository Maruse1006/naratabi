

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
<img src="{{ asset('img/shika.jpg') }}" />
 <div class="title">
  <p>鹿と大仏だけじゃない奈良を知る</p>
 </div>
<!--
  <main>
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
-->

<main>
  <ul class="menu">
    <li>
      <a href="">親メニュー１</a>
      <ul>
        <li><a href="">子メニュー1</a></li>
        <li><a href="">子メニュー2</a></li>
        <li><a href="">子メニュー3</a></li>
      </ul>
    </li>

    <li>
      <a href="">親メニュー１</a>
      <ul>
        <li><a href="">子メニュー1</a></li>
        <li><a href="">子メニュー2</a></li>
        <li><a href="">子メニュー3</a></li>
      </ul>
    </li>
    <li>
      <a href="">親メニュー１</a>
      <ul>
        <li><a href="">子メニュー1</a></li>
        <li><a href="">子メニュー2</a></li>
        <li><a href="">子メニュー3</a></li>
      </ul>
    </li>

  </ul>
</main>

 <form action="/place/find" method="post">
  {{csrf_field()}}
<div class="search">
  <input type="text" name="input">
  <input type="submit" value="find">
</div>

</div>
 </form>
 </body>
</html>

<style>
</style>
<scrpt>

</scrpt>
