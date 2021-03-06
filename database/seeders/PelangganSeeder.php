<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert(
            [
                [
                    'nama' => 'Abdul Rifai Natanegara ',
                    'alamat' => 'jl.pasuruan no 43 ',
                    'notelp' => '089765343123',
                    'jeniskelamin' => 'L'
                ],
                [
                    'nama' => 'Adriana Maya Politon ',
                    'alamat' => 'jl. Raya kejayan no 11',
                    'notelp' => '089655783984',
                    'jeniskelamin' => 'P'
                ],
                [
                    'nama' => 'Andre Sukendra Atmadja ',
                    'alamat' => 'jl. Raya Warungdowo no 01',
                    'notelp' => '085664783984',
                    'jeniskelamin' => 'L'
                ],
                [
                    'nama' => 'Angela Lestari Widjaja ',
                    'alamat' => 'jl. Raya Gondangwetan no 5',
                    'notelp' => '081233455765',
                    'jeniskelamin' => 'P'
                ],
                [
                    'nama' => 'Bayu Virgan Triyatno',
                    'alamat' => 'jl. Raya Panglima Soederman no 02',
                    'notelp' => '0856775453224',
                    'jeniskelamin' => 'L'
                ],
                [
                    'nama' => 'Candra Winoto Salim',
                    'alamat' => 'jl. Raya Pleret no 12',
                    'notelp' => '082888765433',
                    'jeniskelamin' => 'L'
                ],
                [
                    'nama' => 'Dewi Livia Sari ',
                    'alamat' => 'jl. Raya Purwosari no 10',
                    'notelp' => '085677998652',
                    'jeniskelamin' => 'P'
                ],
            ]
            );
    }
}
