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
          'id'=>10,
          'name'=>'春日ホテル',
          'content'=>'',
          'content2'=>'',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kasugahotel.jpg',
          'path2'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kasugahotel2.jpg',
          'openning_hour'=>'チェックイン 15時〜(最終19時),チェックアウト10時〜',
          'adress'=>'奈良県奈良市登大路町40',
          'access'=>'近鉄奈良駅から徒歩2分',
          'official_url'=>'https://www.kasuga-hotel.co.jp',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13123.351983553279!2d135.81313750781246!3d34.684038000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013987b8609d01%3A0xb4dab234ac9ea59f!2z5pil5pel44Ob44OG44Or!5e0!3m2!1sja!2sus!4v1674819728684!5m2!1sja!2sus',
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
