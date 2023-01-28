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
          'id'=>15,
          'name'=>'みたらい渓谷',
          'content'=>'エメラルドグリーンに輝く神秘的な淵。大小様々な滝と巨岩を縫い底まで透けて見える清流が流れるみたらい渓谷には、川沿いに遊歩道が整備され、つり橋からは滝を上から眺めることもでき、まさに絶景！そのダイナミックな渓谷美に感動！ 新緑がきらきら輝く春、水しぶきに川サツキが美しい夏、まさに天から降ってくるように山頂から色付き全山紅葉の錦秋(11月上旬)、山水画の冬と、四季折々の景観は、近畿地方随一の美しさとたたえられています。',
          'content2'=>'エメラルドグリーンに輝く神秘的な淵。大小様々な滝と巨岩を縫い底まで透けて見える清流が流れるみたらい渓谷には、川沿いに',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/mitarai.jpg',
          'path2'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/mitarai2.jpg',
          'openning_hour'=>'',
          'adress'=>'〒638-0303 吉野郡天川村北角',
          'access'=>'近鉄 下市口駅から奈良交通バス洞川温泉行及び中庵住行バスで約1時間「天川川合」下車 徒歩40分',
          'official_url'=>'https://www.vill.tenkawa.nara.jp/#center',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26386.444061736547!2d135.85400216508157!3d34.24074724939632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m',
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
