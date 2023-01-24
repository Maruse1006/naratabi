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
          'id'=>9,
          'name'=>'吉野山',
          'content'=>'日本一の桜の名所として知られる吉野山ですが、春の桜が終われば夏にかけて紫陽花が咲き誇り、夏の新緑に囲まれた山は森林浴スポットとしても近年訪れる方が増えています。
          秋になると山々は紅く染まり、寺社・仏閣巡りとともにハイキングも楽しめます。
          そして冬になると真っ白な雪景色のなか佇む名所・旧跡は静寂につつまれ、荘厳な雰囲気を感じていただけます',
          'content2'=>'日本一の桜の名所として知られる吉野山ですが、春の桜が終われば夏にかけて紫陽花が咲き誇り、夏の新緑に囲まれた山・・・',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/yoshino.jpg',
          'path2'=>'',
          'openning_hour'=>'',
          'adress'=>'奈良県吉野郡吉野町吉野山2430',
          'access'=>'',
          'official_url'=>'http://www.yoshinoyama-sakura.jp/',
          'googlemap'=>'"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52698.3014577568!2d135.8304423627589!3d34.35954143935854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6006c7b2a3a994d3%3A0xd8ab9041137873a0!2z5ZCJ6YeO5bGx!5e0!3m2!1sja!2sjp!4v1674598591933!5m2!1sja!2sjp"           ',
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
