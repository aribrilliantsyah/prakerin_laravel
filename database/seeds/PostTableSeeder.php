<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->delete();
        $a=[
             ['title'=>'contoh','content'=>'apa aja']
           ];
        DB::table('post')->insert($a);

    }
}
