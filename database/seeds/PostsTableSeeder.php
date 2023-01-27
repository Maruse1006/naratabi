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
          'id'=>11,
          'name'=>'日航ホテル奈良',
          'content'=>'JR奈良駅とデッキでつながったホテル。天然温泉「飛鳥の湯」もあり、【Lohas】をコンセプトした、おもてなしが体験できる。',
          'content2'=>'',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/nikkohotelnara.jpg',
          'path2'=>'',
          'openning_hour'=>'チェックイン　15:00 チェックアウト　11:00',
          'adress'=>'奈良県奈良市登大路町40',
          'access'=>'近鉄奈良駅から徒歩2分',
          'official_url'=>'https://www.nikkonara.jp/',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.9353703575534!2d135.8162084795222!3d34.68158059184572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600150777bcbed7b%3A0xb26b8abf60e80cb6!2z44Ob44OG44Or5pel6Iiq5aWI6Imv!5e0!3m2!1sja!2sjp!4v1674858904927!5m2!1sja!2sjp',
          'category_id'=>'3',
        ],
        [
          'id'=>12,
          'name'=>'スーパーホテルLOHAS･JR奈良駅',
          'content'=>'奈良最大規模の本格派シティホテル。JR奈良駅西口に直結し、アクセスも抜群。和食、鉄板焼き、バイキングなどレストランも多彩。',
          'content2'=>'',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/Lohashotel.jpg',
          'path2'=>'',
          'openning_hour'=>'チェックイン　15:00 チェックアウト　11:00',
          'adress'=>'奈良県奈良市登大路町40',
          'access'=>'近鉄奈良駅から徒歩2分',
          'official_url'=>'https://www.nikkonara.jp/',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.9353703575534!2d135.8162084795222!3d34.68158059184572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600150777bcbed7b%3A0xb26b8abf60e80cb6!2z44Ob44OG44Or5pel6Iiq5aWI6Imv!5e0!3m2!1sja!2sjp!4v1674858904927!5m2!1sja!2sjp',
          'category_id'=>'3',
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
