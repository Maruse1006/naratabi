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
          'id'=>14,
          'name'=>'當麻寺',
          'content'=>'白鳳時代の當麻寺開創に伴い、役行者が道場として開いたのが中之坊で、天平期、十一世実雅上人(中将姫の師)の代に當麻寺住職の住房｢中院御坊｣として成立した當麻寺最古の僧坊。以来、一山の筆頭寺院として代々當麻寺を護持してきた。弘仁時代(九世紀初)、十四世実弁上人が弘法大師に教えを授かり、以後、當麻寺は真言宗の霊場となり、今も中之坊は別格本山として大師信仰、観音信仰の中心を担っている。當麻寺中之坊庭園は、古くから大和三名園(竹林院、慈光院)と賞される池泉回遊式兼観賞式庭園。大円窓の茶室(重文)や、様々な寺宝が入れ替え制で展示される霊宝殿、などが公開されているほか、壮麗な絵天井の下で當麻曼荼羅の諸尊などの写仏体験ができる寺としても知られている。',
          'content2'=>'白鳳時代の當麻寺開創に伴い、役行者が道場として開いたのが中之坊で、天平期、十一世実雅上人(中将姫の師)の代に當麻寺',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/tomadera.jpg',
          'path2'=>'',
          'openning_hour'=>'09:00 ～ 17:00',
          'adress'=>'〒639-0276 葛城市當麻1263',
          'access'=>'近鉄 南大阪線 当麻寺駅 徒歩15分',
          'official_url'=>'https://www.taimadera.org',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.4792996908404!2d135.69274405054782!3d34.5160827803865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60012c1865266bb7%3A0x475ce28bd1674d06!2z55W26bq75a-6!5e0!3m2!1sja!2sjp!4v1674878138535!5m2!1sja!2sjp',
          'category_id'=>'1',
        ],
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
