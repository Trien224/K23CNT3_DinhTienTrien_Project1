<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dtt_quantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dttquantri')->insert([
            'dttTaikhoan'=>'tientriendinh224@gmail.com',
            'dttMatkhau'=>'Trien2005',
            'dttTrangthai'=>1,
           
            ]);
        DB::table('dttquantri')->insert([
            'dttTaikhoan'=>'trien@gmail.com',
            'dttMatkhau'=>'2005',
            'dttTrangthai'=>0,
            ]);
    }
}
