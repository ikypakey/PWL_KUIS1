<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                    'gambar' => 'img/employee/employee-1.jpg',
                    'nama' => 'Ahmad Dani Maulana ',
                    'alamat' => 'Surabaya',
                    'jabatan' => 'Staff Admin'
                ],
                [
                    'gambar' => 'img/employee/employee-2.jpg',
                    'nama' => 'Ahmad Dahlan, S.Kom ',
                    'alamat' => 'Surabaya',
                    'jabatan' => 'Manager'
                ],
                [
                    'gambar' => 'img/employee/employee-3.jpg',
                    'nama' => 'Mahalini Kemala ',
                    'alamat' => 'Mojokerto',
                    'jabatan' => 'Staff Keuangan'
                ],
                [
                    'gambar' => 'img/employee/employee-4.jpg',
                    'nama' => 'Dino Sijabat ',
                    'alamat' => 'Gresik',
                    'jabatan' => 'Staff Keuangan'
                ],
                [
                    'gambar' => 'img/employee/employee-5.jpg',
                    'nama' => 'Kartini ',
                    'alamat' => 'Sidoarjo',
                    'jabatan' => 'Sprinter'
                ],
                [
                    'gambar' => 'img/employee/employee-6.jpg',
                    'nama' => 'Doni Salmanan ',
                    'alamat' => 'Jombang',
                    'jabatan' => 'Staff Operasional'
                ],
                [
                    'gambar' => 'img/employee/employee-7.jpg',
                    'nama' => 'Indra Kesuma ',
                    'alamat' => 'Jombang',
                    'jabatan' => 'Staff Operasional'
                ],
                [
                    'gambar' => 'img/employee/employee-8.jpg',
                    'nama' => 'Muhammad Rizki ',
                    'alamat' => 'Mojokerto',
                    'jabatan' => 'Staff Marketing'
                ],
                [
                    'gambar' => 'img/employee/employee-9.jpg',
                    'nama' => 'Alini Mustika ',
                    'alamat' => 'Pasuruan',
                    'jabatan' => 'Staff Marketing'
                ],
                [
                    'gambar' => 'img/employee/employee-10.jpg',
                    'nama' => ' Almash Kurniawan ',
                    'alamat' => 'Surabaya',
                    'jabatan' => 'Operator Produksi'
                ],
                [
                    'gambar' => 'img/employee/employee-11.jpg',
                    'nama' => 'Firgi Sotya ',
                    'alamat' => 'Pasuruan',
                    'jabatan' => 'Staff Produksi'
                ],
                [
                    'gambar' => 'img/employee/employee-12.jpg',
                    'nama' => 'Kartono',
                    'alamat' => 'Pasuruan',
                    'jabatan' => 'Kurir'
                ],
            ]
            );
    }
}
