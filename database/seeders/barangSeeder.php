<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
        [
            'kode_barang' => '01',
            'nama_barang' => 'Sepatu',
            'deskripsi' => 'Sepatu dengan kualitas bagus harga terjangkau',
            'foto' => 'sepatu.jpg',
            'harga' => 'Rp. 150.000'
        ],
        [
            'kode_barang' => '02',
            'nama_barang' => 'Ransel',
            'deskripsi' => 'Ransel dengan berbagai model',
            'foto' => 'tas.jpg',
            'harga' => 'Rp. 250.000'
        ],
        [
            'kode_barang' => '03',
            'nama_barang' => 'Topi',
            'deskripsi' => 'Topi trend masa kini',
            'foto' => 'topi.jpg',
            'harga' => 'Rp. 100.000'
        ],
        [
            'kode_barang' => '04',
            'nama_barang' => 'Tshirt',
            'deskripsi' => 'Tshirt dengan bahan yang nyaman',
            'foto' => 'tshirt.jpg',
            'harga' => 'Rp. 300.000'
        ]
        ]);
    }
}
