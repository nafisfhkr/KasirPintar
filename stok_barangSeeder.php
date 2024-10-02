<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stok_barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok_barang')->insert([
            ['nama_barang'=> 'babi'],
            ['nama_barang'=> 'sapi'],
            ['nama_barang'=> 'kambing']
        ]);
    }
}
