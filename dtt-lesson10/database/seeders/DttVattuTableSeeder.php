<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DttVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dttvattu')->insert([
            'dttMaVTu'=>'DD01',
            'dttTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'dttDvTinh'=>'Bộ',
            'dttPhanTram'=>40,
            ]);
        DB::table('dttvattu')->insert([
            'dttMaVTu'=>'DD02',
            'dttTenVTu'=>'Đầu DVD Itachi 1 cửa',
            'dttDvTinh'=>'Bộ',
            'dttPhanTram'=>40,
            ]);
    
    }
}
