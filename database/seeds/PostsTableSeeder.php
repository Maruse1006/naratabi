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
          'id'=>16,
          'name'=>'屯鶴峯（どんづるぼう）',
          'content'=>'千数百万年前に二上山の火山活動によって火砕流や火山灰などが堆積し、その後の地殻変動によって隆起し、さらに、長い年月の間に侵食されて現在の姿になりました。古くは古墳の石棺材や寺院の基壇などの石材として利用されました。遠くから見ると鶴が屯（たむろ）しているような奇観のため、この名称で呼ばれるようになりました。≪県指定天然記念物≫',
          'content2'=>'千数百万年前に二上山の火山活動によって火砕流や火山灰などが堆積し、その後の地殻変動によって',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/%E3%81%A9%E3%82%93%E3%81%9A%E3%82%8B.jpg',
          'path2'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/%E3%81%A9%E3%82%93%E3%81%9A%E3%82%8B%EF%BC%92.jpg',
          'openning_hour'=>'',
          'adress'=>'香芝市穴虫地内',
          'access'=>'近鉄南大阪線「二上山駅」下車、西へ徒歩約32分（約2.5km）',
          'official_url'=>'https://www.city.kashiba.lg.jp/soshiki/15/4690.html',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13146.040637676544!2d135.6453495395508!3d34.540636400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60012926bafa96c7%3A0xae3a6e63b13f7a39!2z5bGv6ba05bOv!5e0!3m2!1sja!2sjp!4v1675086462096!5m2!1sja!2sjp',
          'category_id'=>'2',
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
