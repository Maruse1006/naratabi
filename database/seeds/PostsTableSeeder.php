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
          'id'=>2,
          'name'=>'曽爾高原',
          'content'=>'日本300名山の一つ倶留尊山（標高1038ｍ）。この山から亀の背に似た亀山（標高849ｍ）を結ぶ西麓に広がるのが曽爾高原です。曽爾高原はススキで一面に覆われた草原で、3月中頃に毎年山焼きが行われ、春から夏にかけては一面に青い絨毯が敷かれたような爽快な姿をみせます。秋にはススキの穂が陽射しを浴びて銀色・金色に輝き、毎年たくさんの観光客が訪れます。また、曽爾高原の中腹には「お亀伝説」が残るお亀池があり、湿原特有に希少な植物を見ることができます。',
          'content2'=>'日本300名山の一つ倶留尊山（標高1038ｍ）。この山から亀の背に似た亀山（標高849ｍ）を結ぶ西麓に広がるのが曽爾高原です。',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/S__43712514.jpg',
          'path2'=>'',
          'openning_hour'=>'',
          'adress'=>'宇陀郡曽爾村太良路',
          'access'=>'',
          'official_url'=>'https://sonimura.com/sightseeing/1/',
          'googlemap'=>'',
          'category_id'=>'2',
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
