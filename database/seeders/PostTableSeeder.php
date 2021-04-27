<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>'This is my First Post',
            'des'=>'This is my First Post This is my First Post This is my First Post This is my First Post This is my First Post'
        ]);
        DB::table('posts')->insert([
            'title'=>'This is my Secount Post',
            'des'=>'This is my First Post This is my First Post This is my First Post This is my First Post This is my First Post'
        ]);
        DB::table('posts')->insert([
            'title'=>'This is my Third Post',
            'des'=>'This is my First Post This is my First Post This is my First Post This is my First Post This is my First Post'
        ]);
        DB::table('posts')->insert([
            'title'=>'This is my Fourth Post',
            'des'=>'This is my First Post This is my First Post This is my First Post This is my First Post This is my First Post'
        ]);
    }
}
