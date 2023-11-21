<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class invoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('invoice_produks')->insert([
            ['nomorInvoice'=>'INV/2023/00001', 
            'invoiceDate'=>'2023-11-21',
            'dueDate'=>'2023-11-27']
        ]
        );
    }
}
