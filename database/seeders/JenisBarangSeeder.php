<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_barangs')->insert([
        [
            'kode' => '01',
            'jenis' => 'Sepatu'
        ],
        [
            'kode' => '02',
            'jenis' => 'Ransel'
        ],
        [
            'kode' => '03',
            'jenis' => 'Topi'
        ],
        [
            'kode' => '04',
            'jenis' => 'Tshirt'
        ]
        ]);
    }
}
