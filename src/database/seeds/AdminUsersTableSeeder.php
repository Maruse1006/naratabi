<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data[]=[
         'id'=>'1',
         'name'=>'maru1111',
         'email'=>'gunkou1006@.gmail',

   ];

 DB::table('admimusers')->insert($data);
    }
    }
}
