<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=1;$i<=10;$i++){
        //   Post::create([
        //     'title'=>'title'.$i,
        //     'content'=>'content'.$i,
        //     'person_in_charge'=>'person_in_charge'.$i,
        //
        //   ]);

     $data = [
        [
          'id'=>5,
          'name'=>'法隆寺',
          'content'=>'推古15年(607)、聖徳太子と推古天皇により創建されたと伝わる。「日本書紀」には、天智9年(670)に伽藍を焼失したとの記述があり、8世紀初頭に現伽藍が完成したと考えられる。兵火や天災にはあわず、太子信仰に守られたこともあって、現存する世界最古の木造建築群として往時の姿を今に伝えている。参道は松並木になっており、参道を抜けたところに南大門(国宝)がある。境内は西院と東院に大きく分かれ、国宝･重要文化財の建築物だけでも55棟に及ぶ。全体は大垣(重要文化財)と呼ばれる築地塀に囲まれている。この寺は法隆寺式伽藍配置と呼ばれる配置になっており、寺の中心である西院伽藍には、五重塔(国宝)と金堂(国宝)が並び、中門(国宝)と大講堂(国宝)をつないで回廊(国宝)が囲む。東に向かって東大門(国宝)を抜けたところに夢殿(国宝)のある東院伽藍が見える。また、建造物以外にも優れた仏教美術品を多数所蔵しており、その数は国宝だけで38件・150点、重要文化財を含めると約3000点にもなる。法隆寺地域の仏教建造物として、平成5年(1993)に、世界文化遺産に登録された。',
          'content2'=>'推古15年(607)、聖徳太子と推古天皇により創建されたと伝わる。「日本書紀」には、天智9年(670)に伽藍を焼失...',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/horyu.jpg',
          'path2'=>'',
          'openning_hour'=>'午前8時～午後5時	2/22～11/3
          午前8時～午後4時半	11/4～2/21',
          'adress'=>'奈良県橿原市久米町934',
          'access'=>'JR法隆寺駅より徒歩約20分バス「法隆寺参道」行き法隆参道下車',
          'official_url'=>'http://www.horyuji.or.jp',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.5701138475724!2d135.78417165054702!3d34.48842818039365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6006cd2943a512e9%3A0x39c5888dab929d3!2z5qm_5Y6f56We5a6u!5e0!3m2!1sja!2sjp!4v1673870415508!5m2!1sja!2sjp',
          'category_id'=>'1',
         ]
        ];
        DB::table('posts')->insert($data);
         }

    // 初期値を配列で入れる
    //     $data=[];
    //
    //     for($i=1;$i<=10;$i++){
    //       $data[]=[
    //          'id'=>$i,
    //          'name'=>'name'.$i,
    //          'content'=>'content'.$i,
    //        'person_in_charge'=>'person_in_charge'.$i,
    //        ''
    //    ];

//      }
//      DB::table('posts')->insert($data);
// }
}
