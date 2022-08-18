<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'nama' => 'Bak Mandi Blong Full',
                'harga' => 1400000,
                'kategori_id' => 1,
                'jumlah_stok' => 20,
                'keterangan' => '• Tinggi 70cm (termasuk tatakan), lebar 57cm • Permukaan glossy mengkilap • Dilengkapi lubang untuk menguras air • Silahkan chat wa untuk informasi ongkir',
                'berat' => 20,
            ],
            [
                'nama' => 'Bak Mandi Bakul',
                'harga' => 1100000,
                'kategori_id' => 1,
                'jumlah_stok' => 18,
                'keterangan' => '• Tinggi 60cm (termasuk tatakan), lebar 46cm • Permukaan glossy mengkilap • Dilengkapi lubang untuk menguras air • Silahkan chat wa untuk informasi ongkir',
                'berat' => 20,
            ],
            [
                'nama' => 'Bak Mandi Malang',
                'harga' => 1400000,
                'kategori_id' => 1,
                'jumlah_stok' => 10,
                'keterangan' => '• Tinggi 70cm bonus tatakan 15cm, lebar 50cm • Permukaan glossy mengkilap • Dilengkapi lubang untuk menguras air • Silahkan chat wa untuk informasi ongkir',
                'berat' => 20,
            ],
            [
                'nama' => 'Bak Mandi UIN',
                'harga' => 900000,
                'kategori_id' => 1,
                'jumlah_stok' => 20,
                'keterangan' => '• Tinggi 65cm (termasuk tatakan), lebar 45cm • Permukaan glossy mengkilap • Dilengkapi lubang untuk menguras air • Silahkan chat wa untuk informasi ongkir',
                'berat' => 20,
            ]
        ]);
        DB::table('photo_products')->insert([
            [
                'product_id' => '1',
                'photo_path' => 'blongfull.jpg'
            ],
            [
                'product_id' => '2',
                'photo_path' => 'bakul.jpg'
            ],
            [
                'product_id' => '3',
                'photo_path' => 'malang.jpg'
            ],
            [
                'product_id' => '4',
                'photo_path' => 'uin.jpg'
            ],
            
        ]);
    }
}
