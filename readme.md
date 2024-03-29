# なら旅net


## アプリの概要
奈良県は修学旅行でしか訪れない人が多いとのはないかと思います。奈良県はどうしても、奈良市内の観光名所しか知らない人が多いのが現状です。
そのような人が奈良を観光目的で訪れた際になかなか目の行き届かない観光スポットを知れるようにこのアプリを作成しました。



## アプリ機能の一覧

### ユーザー登録機能

ユーザー登録することができます。登録することで、写真投稿機能や、レビュー、いいねなどの機能が使えるようになります。
フロントエンドとバックエンドを分けて、開発を行いました。バックエンドでWeb APIを提供し、フロントエンドでそのAPIを呼び出して画面の描画を行う作りになっています。

### ログイン機能

ユーザー情報を登録して、ログインすることができます。　

 
<img width="453" alt="home①" src="https://user-images.githubusercontent.com/58674336/197056462-f6a9eed4-88bf-4cda-9bc8-a3260045f99f.png">  

### 写真投稿機能

撮影した奈良の写真を投稿することができます。

<img width="450" alt="postimage" src="https://user-images.githubusercontent.com/58674336/197186778-1db09f14-db22-4d93-a4fe-b3529e8a753c.png">

### レビュー機能

掲載されている奈良の観光名所や宿について、口コミと５段階（星の数）で評価することができます。

### いいね機能

写真の投稿に対して「いいね」ができます。他のユーザーがいいねした総数も見ることができます。

### 検索機能

カテゴリーによって、検索できるようにしています。寺・神社、自然、宿のカテゴリーから自分の調べたい ものに合わせて検索できます。

検索結果一覧

<img width="450" alt="login" src="https://user-images.githubusercontent.com/58674336/203547632-391a7c92-cc25-4ff5-ac1a-98b77e49eebe.png">  

　　



<a>・レビュー機能</a>      
掲載されている奈良の観光名所や宿についての口コミや５段階評価（星の数）で評価することができます。

## テーブル構造

<img width="1064" alt="er図" src="https://user-images.githubusercontent.com/58674336/199216881-5920b60f-6f99-4769-a0b0-f606c0294ee6.png">

## **技術・環境**
<img src="https://user-images.githubusercontent.com/58674336/203543014-f247308a-8445-4f00-a902-bea0c2e837f7.png">

### フロントエンド

・HTML/CSS/Sass 

・Vue.js/Vuetify/Nuxt.js

### バックエンド

 ・PHP 

・Laravel

・PHPUnit




## 苦労した点・理解に努めた点
・ログイン機能
 認証のtokenを保持、発行し、ログインする機能作成に苦労しました。  
 また、ログインユーザーとログインしていないユーザーの閲覧を分けるためにmillewareの設定を行いました。
 
・modelリレーションについての理解   
  写真投稿に対して「いいね」機能をつける際、likesテーブルを中間テーブルとしてusersテーブルと、postsテーブルの多対多のリレーションをモデルに書き,  
 ・自分が写真投稿一覧の中で、すでに「いいね」をした投稿のハートの色を変える   
 ・写真に対する「いいね」数を表示する  
   という機能を作るのに苦労しましたが、設計や実装の理解が深まりました。
  
・アニメーション  
  ページが表示された時にページの各項目が何も表示されていない状態から表示されている状態になるアニメーションを追加しました。
  

## こだわった点
ユーザーがアプリ内で情報を検索するだけでなく、ユーザーも奈良の情報を発信できるように写真投稿や掲載されているここの観光名所に対して、
レビュー機能を掲載しました。

##  アプリを作った感想
エラーの解決に何時間、何日も要したことがあり、何度も挫折しそうになりましたが、MENTAと
いうサービスでメンターの方と契約し、問題に直面した際は、質問を随時したり、週１回面談を行うことで解決しました。
エラーが解決しない時間は苦しかったのですが、その分、解決した時は達成感を得れられることができました。
今後もインフラ関連の知識など、知識が乏しいため、技術向上に努めるように勉強を継続します。
ご拝読ありがとうございました。






