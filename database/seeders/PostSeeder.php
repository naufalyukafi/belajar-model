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
        $data = [
            [
                'title' => 'Yukafi',
                'slug' => ' 1',
                'image' => 'https://avatars.githubusercontent.com/u/56672065?s=460&u=5fad09e5f435fd72cd83d8518722849ca45d5ee8&v=4',
                'content' => 'Belajar dengan Laravel sungguh menyenangkan',
                'draft' => 0
            ],
            [
                'title' => 'Shiva',
                'slug' => ' 2',
                'image' => 'https://avatars.githubusercontent.com/u/62060912?s=460&v=4',
                'content' => 'Belajar dengan Laravel sungguh menyenangkan',
                'draft' => 0
            ],

        ];
        DB::table('posts')->insert($data);
    }
}
