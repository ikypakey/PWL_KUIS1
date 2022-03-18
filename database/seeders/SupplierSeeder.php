<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert(
            [
                [
                    'nama' => 'CV. Mustika Jaya ',
                    'alamat' => 'Surabaya',
                    'notelp' => '089765423455',
                    'deskripsi' => 'Supplier Buah '
                ],
                [
                    'nama' => 'CV. Harapan Bangsa ',
                    'alamat' => 'Mojokerto',
                    'notelp' => '082265423455',
                    'deskripsi' => 'Supplier Sayur'
                ],
                [
                    'nama' => 'CV. Meat Sejahtera ',
                    'alamat' => 'Surabaya',
                    'notelp' => '081165423455',
                    'deskripsi' => 'Supplier Daging Sapi'
                ],
                [
                    'nama' => 'CV. Ayam Mandiri ',
                    'alamat' => 'Pasuruan',
                    'notelp' => '080965423455',
                    'deskripsi' => 'Supplier Daging Ayam'
                ],
                [
                    'nama' => 'CV. Goat Nusantara ',
                    'alamat' => 'Surabaya',
                    'notelp' => '089762113455',
                    'deskripsi' => 'Supplier Daging Kambing'
                ],
                [
                    'nama' => 'CV. Sehat Sejahtera ',
                    'alamat' => 'Sidoarjo',
                    'notelp' => '089763333455',
                    'deskripsi' => 'Supplier Susu'
                ],
                  [
                    'nama' => 'CV. Indo Makmur ',
                    'alamat' => 'Sidoarjo',
                    'notelp' => '081163333455',
                    'deskripsi' => 'Supplier Bumbu'
                ],
                
            ]
            );
    }
}
