<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
         'email_verified_at'=>null,
         'password'=>Hash::make('gunkou1006'),
         'remember_token'=>'',
         'created_at'=>null,
         'updated_at'=>null,
   ];

 DB::table('users')->insert($data);
    }
}
