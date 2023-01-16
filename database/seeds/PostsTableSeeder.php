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
          'id'=>1,
          'name'=>'春日大社',
          'content'=>'神護景雲2(768)年、今の地に社殿が造営され、現在のような規模が整ったのは平安時代前期のこと。境内には、朱塗りのあでやかな社殿が立ち、古来より藤の名所としても有名。また、境内には春日大社国宝殿があり、国宝352点、重要文化財971点を含む約3000点を収蔵、公開している。皇室の尊崇に加えて、庶民の信仰も厚かったため、数多くの灯籠が奉納された。一之鳥居(重要文化財)から春日灯籠が並ぶ参道を行くと、春日大社神苑萬葉植物園がある。園内には万葉集に登場する草花約300種が植えられており、ゆかりの万葉歌が添えられている。',
          'content2'=>'神護景雲2(768)年、今の地に社殿が造営され、現在のような規模が整ったのは平安時代前期のこと。境内には、',
          'path'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/1SXaNY5LJL6jhkseJUCfHRoMjL8WytbTA7fgcW23.jpeg',
          'path2'=>'https://naratabi.s3.ap-northeast-1.amazonaws.com/images/kohukuji.JPG',
          'openning_hour'=>'3月～10月 6：30～17:30,11月～2月 7：00～17:00(御本殿参拝所)',
          'adress'=>'〒630-8212 奈良市春日野町160',
          'access'=>'近鉄奈良線「奈良駅」から約25分',
          'official_url'=>'https://www.kasugataisha.or.jp',
          'googlemap'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6561.835890122676!2d135.8412574115803!3d34.68202035963019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600139c06bb06ad5%3A0x4c97e78382e39596!2z5pil5pel5aSn56S-!5e0!3m2!1sja!2sjp!4v1626782875980!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"',
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
