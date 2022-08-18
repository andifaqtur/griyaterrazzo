<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'nama' => 'Bak Mandi',
        	'gambar' => 'bakmandi.png',
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Pot Tanaman',
        	'gambar' => 'pot.png',
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Bathtub',
        	'gambar' => 'bathub.png',
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Wastafel',
        	'gambar' => 'wastafel.png',
        ]);
    }
}