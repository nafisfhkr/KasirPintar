<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class karyawan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan')->insert([
            ['nama_karyawan'=> 'mahesa'],
            ['nama_karyawan'=> 'afif'],
            ['nama_karyawan'=> 'nopal']
        ]);
    }
}
