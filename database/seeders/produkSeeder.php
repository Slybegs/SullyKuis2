<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('daftar_produks')->insert([
            ['invoiceID'=>2, 
            'description'=>'Kaos Warna Hitam Size S',
            'quantity'=>'5',
            'unitPrice'=>'50000.00',
            'taxes'=>11,
            'amount'=>'250000.00']
        ]
        );
    }
}
