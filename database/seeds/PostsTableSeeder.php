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
          'id'=>6,
          'name'=>'東大寺',
          'content'=>'奈良時代に聖武天皇の勅願により建立。延べ260万人もの人々の協力によりすべてのものの幸福を願い造られた大仏様は、天平勝宝４（752）年、開眼供養会が盛大に営まれた。治承４（1180）年、平重衡の南都焼き討ちで大半の堂塔を焼失したが、鎌倉時代に重源上人の勧進で復興。永禄10（1567）年に松永久秀の兵火にかかり再度被災した後、江戸時代に公慶上人らの勧進で再興。現在の寺観は江戸中期までに整えられた。境内には「奈良の大仏さま」として名高い盧舎那仏坐像が安置されている大仏殿、創建当時の遺構を残す転害門、法華堂をはじめ、鎌倉時代復興の代表作である南大門、鐘楼、江戸時代再建の二月堂といった数多くの国宝建造物がたち並ぶ。1998年12月に「古都奈良の文化財」として、世界遺産に登録された。',
          'content2'=>'奈良時代に聖武天皇の勅願により建立。延べ260万人もの人々の協力によりすべてのものの幸福を願い造られた大仏様は...',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/todaiji.jpg',
          'path2'=>'',
          'openning_hour'=>'',
          'adress'=>'奈良市雑司町406-1',
          'access'=>'近鉄奈良駅から、登大路町を東へ徒歩約20分',
          'official_url'=>'https://www.todaiji.or.jp',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6561.283898817292!2d135.8315761!3d34.6889851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600139907a0876dd%3A0xf890ac3f9dd53c8f!2z5p2x5aSn5a-6!5e0!3m2!1sja!2sjp!4v1664882162324!5m2!1sja!2sjp',
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
