<?php

use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswas')->delete();
        $a=[["nama"=>"Fallah Sa'epudin","alamat"=>"Cilisung","jk"=>"Laki-laki"],
             ["nama"=>"Ari Ardiansyah","alamat"=>"Kp ranca","jk"=>"Laki-laki"],
             ["nama"=>"Ade Temi","alamat"=>"Tdk di ketahui","jk"=>"Laki-laki"],
             ["nama"=>"Ferlansyah","alamat"=>"Mana Aja","jk"=>"Laki-laki"],
             ["nama"=>"Ina ni","alamat"=>"Cilisung","jk"=>"Laki-laki"],];
             DB::table('siswas')->insert($a);
    }
}
