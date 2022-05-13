<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[]=[
            'id'=>'12',
            'name'=>'maru1006',
            'email'=>'aaa1006@.gmail',
            'email_verified_at'=>null,
            'password'=>Hash::make('ivusa1006'),
            'remember_token'=>'',
            'created_at'=>null,
            'updated_at'=>null,
      ];
   
    }
}
