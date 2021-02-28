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

    // $data = [
    //    [
    //      'id'=>1,
    //      'title'=>'title',
    //      'content'=>'content',
    //      'person_in_charge'=>'person_in_charge'
    //
    //    ]
    // ];
  //  DB::table('posts')->insert($data);
    //    }
        $data=[];

        for($i=1;$i<=10;$i++){
          $data[]=[
             'id'=>$i,
             'title'=>'title'.$i,
             'content'=>'content'.$i,
           'person_in_charge'=>'person_in_charge'.$i,
       ];

     }
     DB::table('posts')->insert($data);
}
}
