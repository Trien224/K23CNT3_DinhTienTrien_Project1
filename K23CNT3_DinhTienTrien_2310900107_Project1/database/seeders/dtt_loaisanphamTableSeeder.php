<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dtt_loaisanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dttloaisanpham')->insert([
            'dttMaloai' => 'L001',
                'dttTenloai' => 'Tranh PC',
                'dttTrangthai' => 1,
           
            ]);
            DB::table('dttloaisanpham')->insert([
                'dttMaloai' => 'L002',
                    'dttTenloai' => 'Tranh dep',
                    'dttTrangthai' => 0,
               
                ]);
    }
}
