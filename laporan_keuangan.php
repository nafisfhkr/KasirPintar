<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class laporan_keuangan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_keuangan')->insert([
            ['created_at'=> '20-09-2004 08:53:30'],
            ['created_at'=> '18-09-2004 09:55:32'],
            ['created_at'=> '19-08-2004 12:56:31']
        ]);
    }
}
