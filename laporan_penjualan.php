<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class laporan_penjualan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_penjualan')->insert([
            ['laporan_penjualan'=> 'babi'],
            ['laporan_penjualan'=> 'sapi'],
            ['laporan_penjualan'=> 'kambing']
        ]);
    }
}
