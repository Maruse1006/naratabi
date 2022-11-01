## アプリの概要
奈良県は修学旅行でしか訪れない人が多いとのはないかと思います。奈良県はどうしても、奈良市内の観光名所しか知らない人が多いのが現状です。
そのような人が奈良を観光目的で訪れた際になかなか目の行き届かない観光スポットを知れるようにこのアプリを作成しました。
検索機能はもちろんのことですが、ユーザーが写真を投稿したり、観光名所に対して、口コミを投稿することができます。



## アプリ機能の一覧

❶ホーム画面  
 
<img width="453" alt="home①" src="https://user-images.githubusercontent.com/58674336/197056462-f6a9eed4-88bf-4cda-9bc8-a3260045f99f.png">  

<a>・検索機能</a>  
<a>カテゴリーによって、検索できるようにしています。寺・神社、自然、宿のカテゴリーから自分の調べたい</a>
<a> ものに合わせて検索できます。</a>

❷ログイン画面　　

<img width="450" alt="login" src="https://user-images.githubusercontent.com/58674336/197067386-761b0561-1832-443d-ba65-13c6e7823207.png">  

<a>・ログイン機能</a>  
ユーザー情報を登録して、ログインすることができます。ログイン後は、投稿された奈良の写真　　
に対して、いいねをつけたり、奈良の写真を投稿することができます。　　


<a>・ユーザー登録</a>  
ユーザー情報を登録できます。　　

❸検索結果一覧　　

<img width="455" alt="research" src="https://user-images.githubusercontent.com/58674336/197183473-e5b45d50-e198-4a64-820c-f68d0cb135ad.png">
　
❹写真投稿機能

<img width="450" alt="postimage" src="https://user-images.githubusercontent.com/58674336/197186778-1db09f14-db22-4d93-a4fe-b3529e8a753c.png">
<a>・いいね機能</a>
　自分がいいと思ったものに対して、いいねができます。
  他のユーザーがいいねした総数も見ることができます。
 
<a>・写真投稿機能</a>    
撮影した奈良の写真を投稿することができます。

<a>・レビュー機能</a>      
掲載されている奈良の観光名所や宿についての口コミや５段階評価（星の数）で評価することができます。


## 苦労した点・理解に努めた点
・ログイン機能
　認証のtokenを保持、発行し、ログインする機能作成に苦労しました。
  また、ログインユーザーとログインしていないユーザーの閲覧を分けるためにmillewareの設定や
　v-ifの設定が難しかったです。
 
・modelリレーションについての理解
　以前のまではmodelについての理解が乏しく、controller内での記述で完結させていました。　　
  いいね機能を付け加えるに当たって、
  今回の場合だと、likeテーブルが中間テーブルとし、。userテーブルとpostテーブル
  に対する各modelに多対多の記述を行いました。
  
 < https://user-images.githubusercontent.com/58674336/199216881-5920b60f-6f99-4769-a0b0-f606c0294ee6.png>

## 技術・環境
フロントエンド
・HTML/CSS/Sass
・Vue.js/Vuetify/Nuxt.js

バックエンド
・Laravel
・PHP
・PHPini

## こだわった点
アプリの管理だけでなく、ユーザーも奈良の情報を発信できるように写真投稿や掲載されているここの観光名所に対して、
レビュー機能を掲載しました。








