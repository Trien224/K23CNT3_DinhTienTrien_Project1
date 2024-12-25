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
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 100,
            'dttDongia' => 1,
            'dttMaloai' => 'L01',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP002',
            'dttTensanpham' => 'Tranh 1200x1000',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 150,
            'dttDongia' => 2,
            'dttMaloai' => 'L01',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP003',
            'dttTensanpham' => 'Tranh 1400x1100',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 120,
            'dttDongia' => 2.5,
            'dttMaloai' => 'L02',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 0,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP004',
            'dttTensanpham' => 'Tranh 1600x1200',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 80,
            'dttDongia' => 3,
            'dttMaloai' => 'L02',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 0,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP005',
            'dttTensanpham' => 'Tranh 1800x1300',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 200,
            'dttDongia' => 1.8,
            'dttMaloai' => 'L01',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP006',
            'dttTensanpham' => 'Tranh 2000x1500',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 50,
            'dttDongia' => 4,
            'dttMaloai' => 'L01',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP007',
            'dttTensanpham' => 'Tranh 2200x1600',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 60,
            'dttDongia' => 5,
            'dttMaloai' => 'L01',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 1,
        ]);
        DB::table('dttsanpham')->insert([
            'dttMasanpham' => 'VP008',
            'dttTensanpham' => 'Tranh 2400x1700',
            'dttHinhanh' => 'images\1734990089.jpg',
            'dttSoluong' => 90,
            'dttDongia' => 6,
            'dttMaloai' => 'L02',   // Ensure this is a valid foreign key ID
            'dttTrangthai' => 0,
        ]);
    }
}
