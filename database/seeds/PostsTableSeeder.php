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
          'name'=>'興福寺',
          'content'=>'興福寺は、京都山科の藤原鎌足私邸に建立された山階寺が前身となります。飛鳥を経て、和銅3(710)年平城遷都に伴い藤原不比等によって現在地に移転されました。その際に興福寺と名付けられ、以降、藤原氏の氏寺として大いに繁栄、奈良時代初期には四大寺の一つにあげられ、四町四方に170坊あまりの堂舎が立ち並ぶ寺院として隆盛を極めました。
          　治承4(1180)年の平重衡の南都焼討ちによって焼失した堂塔は、鎌倉時代に復興を遂げますが、その後、享保2年(1717)の火災によって、伽藍の西半分を失いました。境内には光明皇后創建とされる五重塔(室町時代再建･国宝)、北円堂(鎌倉時代再建･国宝)の国宝建築物をはじめ、南円堂(江戸時代再建･重要文化財)、国宝館などが立っている法相宗の大本山。また多くの仏教彫刻の名品を所蔵しています。(世界遺産)',
          'content2'=>'興福寺は、京都山科の藤原鎌足私邸に建立された山階寺が前身となります。飛鳥を経て、和銅3(710)年平城遷都に伴い',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kohukuji.JPG',
          'path2'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kohukuji3.jpg',
          'openning_hour'=>'9:00～17:00（入堂・入館は16:45まで）',
          'adress'=>'奈良県奈良市登大路町４８',
          'access'=>'',
          'official_url'=>'https://www.kohfukuji.com/',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.883763360445!2d135.8281072269531!3d34.682883000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013988b79c5b25%3A0x6c4688dae2879e1!2z6IiI56aP5a-65p2x6YeR5aCC!5e0!3m2!1sja!2sjp!4v1664882800920!5m2!1sja!2sjp',
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
