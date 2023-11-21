<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class perusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('informasi_perusahaans')->insert([
            ['namaPerusahaan'=>'PT. Clowtie', 
            'alamatPerusahaan'=>'Jalan Merpati No. 18AA',
            'kotaPerusahaan'=>'Medan',
            'provinsiPerusahaan'=>'Sumatera Utara',
            'negaraPerusahaan'=>'Indonesia']
        ]
        );
    }
}
