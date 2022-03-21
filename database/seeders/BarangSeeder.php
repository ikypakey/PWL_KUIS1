<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert(
            [
                [
                    'gambar' => 'img/product/product-1.jpg',
                    'nama' => 'Daging ',
                    'harga' => 30.00
                ],
                [
                    'gambar' => 'img/product/product-2.jpg',
                    'nama' => 'Pisang ',
                    'harga' => 25.00
                ],
                [
                    'gambar' => 'img/product/product-3.jpg',
                    'nama' => 'Jambu Merah',
                    'harga' => 15.00
                ],
                [
                    'gambar' => 'img/product/product-4.jpg',
                    'nama' => 'Anggur',
                    'harga' => 17.00
                ],
                [
                    'gambar' => 'img/product/product-5.jpg',
                    'nama' => 'Hamburger',
                    'harga' => 22.00
                ],
                [
                    'gambar' => 'img/product/product-6.jpg',
                    'nama' => 'Mangga',
                    'harga' => 22.00
                ],
                [
                    'gambar' => 'img/product/product-7.jpg',
                    'nama' => 'Semangka',
                    'harga' => 26.00
                ],
                [
                    'gambar' => 'img/product/product-8.jpg',
                    'nama' => 'Apel',
                    'harga' => 16.00
                ],
                [
                    'gambar' => 'img/product/product-9.jpg',
                    'nama' => 'Sliwki',
                    'harga' => 19.00
                ],
                [
                    'gambar' => 'img/product/product-10.jpg',
                    'nama' => 'Ayam kripsi',
                    'harga' => 21.00
                ],
                [
                    'gambar' => 'img/product/product-11.jpg',
                    'nama' => 'Tropicana',
                    'harga' => 21.00
                ],
                [
                    'gambar' => 'img/product/product-12.jpg',
                    'nama' => 'Buah buahan',
                    'harga' => 45.00
                ],
            ]
            );
    }
}
