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
          'id'=>3,
          'name'=>'橿原神宮',
          'content'=>'畝傍山の東南麓に位置する。明治23(1890)年、神武帝が造営し即位した場所とする「日本書紀」の記述を基に創建された。
          第一代神武天皇と皇后を祀る。京都御所の内侍所を移築した本殿(重要文化財)には、手前に内拝殿、外拝殿が立つ。
          また、文華殿(重要文化財)は織田家の藩邸を移築したもの。広大さを誇る神域は53万m2に及び、敷地内には森林遊苑や深田池などもある。
          玉砂利を敷き詰めた外拝殿前広場も素晴らしい。',
          'content2'=>'畝傍山の東南麓に位置する。明治23(1890)年、神武帝が造営し即位した場所とする「日本書紀」の記述を基に創建',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kashihara.JPG',
          'path2'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kashiharajingu2.JPG',
          'openning_hour'=>'【9/11（日）より】
          開門：午前6時 ／ 閉門：午後5時
          ※季節により開閉門時間が異なります。',
          'adress'=>'奈良県橿原市久米町934',
          'access'=>'',
          'official_url'=>'https://www.kohfukuji.com/',
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
