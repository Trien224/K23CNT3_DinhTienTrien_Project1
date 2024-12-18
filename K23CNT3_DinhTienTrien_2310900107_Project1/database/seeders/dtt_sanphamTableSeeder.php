<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dtt_sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP001',
            'dttTensanpham' => 'Tranh 1080x990',
            'dttHinhanh' => 'Tranh 1',
            'dttSoluong' => 100,
            'dttDongia' => 1,
            'dttMaloai' => 1,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 0,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP002',
            'dttTensanpham' => 'Tranh 1200x1000',
            'dttHinhanh' => 'Tranh 2',
            'dttSoluong' => 150,
            'dttDongia' => 2,
            'dttMaloai' => 1,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP003',
            'dttTensanpham' => 'Tranh 1400x1100',
            'dttHinhanh' => 'Tranh 3',
            'dttSoluong' => 120,
            'dttDongia' => 2.5,
            'dttMaloai' => 2,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 0,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP004',
            'dttTensanpham' => 'Tranh 1600x1200',
            'dttHinhanh' => 'Tranh 4',
            'dttSoluong' => 80,
            'dttDongia' => 3,
            'dttMaloai' => 2,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP005',
            'dttTensanpham' => 'Tranh 1800x1300',
            'dttHinhanh' => 'Tranh 5',
            'dttSoluong' => 200,
            'dttDongia' => 1.8,
            'dttMaloai' => 1,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP006',
            'dttTensanpham' => 'Tranh 2000x1500',
            'dttHinhanh' => 'Tranh 6',
            'dttSoluong' => 50,
            'dttDongia' => 4,
            'dttMaloai' => 3,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP007',
            'dttTensanpham' => 'Tranh 2200x1600',
            'dttHinhanh' => 'Tranh 7',
            'dttSoluong' => 60,
            'dttDongia' => 5,
            'dttMaloai' => 3,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP008',
            'dttTensanpham' => 'Tranh 2400x1700',
            'dttHinhanh' => 'Tranh 8',
            'dttSoluong' => 90,
            'dttDongia' => 6,
            'dttMaloai' => 3,   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 0,
        ]);
    }
}
