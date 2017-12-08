<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
        	$data = [
                'title' => str_random(8),
                'spyj' => rand(10,10000),
                'spxj' => rand(10,10000),
                'spkc' => rand(100,1000),
                'cons' => '这是一个商品',
            ];
            $id = DB::table('goods')->insertGetId($data);
            //空数组
            $tmp = [];
            for($j=0;$j<4;$j++) {
                //拼接数据
                $t = [
                    'spid' => $id,
                    'imgs' => $faker->imageUrl(400, 400)
                ];
                //压入数据
                $tmp[] = $t;
            }  
            DB::table('goods_img')->insert($tmp);
        }
    }
}
