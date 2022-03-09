<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =[
            [
                'id'=> 1,
                'name'=>'Pasta Capellini',
                'image'=>'images/thumb1.png'
            ],
            [
                'id'=> 2,
                'name'=>'Pasta Pillus',
                'image'=>'images/thumb2.jpg'
            ],
            [
                'id'=> 3,
                'name'=>'Pasta Fusilli',
                'image'=>'images/thumb3.png'
            ]
            ];
        \DB::table('posts')->insert($posts);
    }
}
