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
    	$d = [];
        for($i=0;$i<100;$i++){
        	$data = [];
        	$data['name'] = str_random(11);
        	$data['phone'] = str_random(11);
        	$data['email'] = str_random(10).'@qq.com';
        	$data['password'] = 'admin';
        	$data['file'] = '/image/u=3635635221.jpg';

        	$d[] = $data;
        }
        DB::table('user')->insert($d);
    }
}
