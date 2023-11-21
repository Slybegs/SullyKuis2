<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('informasi_pelanggans')->insert([
            ['namaPelanggan'=>'Budi Hariadi', 
            'alamatPelanggan'=>'Jalan Bridjen Katamso No. 35',
            'kotaPelanggan'=>'Medan',
            'provinsiPelanggan'=>'Sumatera Utara',
            'negaraPelanggan'=>'Indonesia']
        ]
        );
    }
}
