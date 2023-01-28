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
          'id'=>13,
          'name'=>'唐招提寺',
          'content'=>'唐の高僧鑑真和上が聖武天皇に招かれ、12年もの間、幾度にも及ぶ苦難の末に来日を果たしたのち、天平宝字3(759)年...',
          'content2'=>'唐の高僧鑑真和上が聖武天皇に招かれ、12年もの間、幾度にも及ぶ苦難の末に来日を果たしたのち、天平宝字3(759)年、新田部親王の旧邸を賜り創建。奈良の大寺のほとんどが勅願による官寺であるのに対し、この寺は鑑真和上発願による私院であることが特徴。境内には金堂、講堂、校倉(2棟)、鼓楼(いずれも国宝)をはじめとする伽藍が立ち並んでいる。これらは、朝廷などの寄進により徐々に整えられていったもので、現在でも創建時の姿を伺い知ることができる。また、天平彫刻の傑作も数多く安置されている。なかでも御影堂（現在は修理中）の鑑真和上像(国宝)は、わが国に現存する最古の肖像彫刻で、晩年をむかえた鑑真和上の深い精神性を感じさせる。開山堂前には、和上像に対面して芭蕉が詠んだ「若葉して御目の雫拭はばや」の句碑が立てられている。わが国に残る最大の天平建築である金堂(国宝)は、平成12年から約10年をかけて本格的な解体修理が行われ(世界遺産)、平成21年11月に終了いたしました。',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/tosho.jpg',
          'path2'=>'',
          'openning_hour'=>'8:30～17:00（受付は16:30まで）',
          'adress'=>'〒630-8032　奈良市五条町13-46',
          'access'=>'JR 奈良駅 六条山行バス17分 「唐招提寺」下車すぐ、近鉄 西ノ京駅 徒歩8分',
          'official_url'=>'https://toshodaiji.jp/sitemap.html',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.173757782821!2d135.78268311508722!3d34.67556384207204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013b040778f7e9%3A0x57c638784fa5da2e!2z5ZSQ5oub5o-Q5a-6!5e0!3m2!1sja!2sjp!4v1674869566301!5m2!1sja!2sjp',
          'category_id'=>'3',
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
