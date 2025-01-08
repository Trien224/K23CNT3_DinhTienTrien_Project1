<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dtt_sanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Danh sách sản phẩm cần chèn
        $products = [
            [
                'dttMasanpham' => 'SP001',
                'dttTensanpham' => 'Ảnh sự kiện',
                'dttHinhanh' => 'images/tranh_phong_canh.jpg',
                'dttSoluong' => 10,
                'dttDongia' => 500000,
                'dttMaloai' => 'L001',
                'dttTrangthai' => 1,
            ],
            [
                'dttMasanpham' => 'SP002',
                'dttTensanpham' => 'Ảnh sự kiện',
                'dttHinhanh' => 'images/tranh_hoa_sen.jpg',
                'dttSoluong' => 15,
                'dttDongia' => 300000,
                'dttMaloai' => 'L001',
                'dttTrangthai' => 1,
            ],
            [
                'dttMasanpham' => 'SP003',
                'dttTensanpham' => 'Ảnh gia đình',
                'dttHinhanh' => 'images/tranh_bach_ma.jpg',
                'dttSoluong' => 20,
                'dttDongia' => 200000,
                'dttMaloai' => 'L002',
                'dttTrangthai' => 1,
            ],
            [
                'dttMasanpham' => 'SP004',
                'dttTensanpham' => 'Ảnh gia đình',
                'dttHinhanh' => 'images/tranh_son_dau.jpg',
                'dttSoluong' => 5,
                'dttDongia' => 1500000,
                'dttMaloai' => 'L002',
                'dttTrangthai' => 1,
            ],
            [
                'dttMasanpham' => 'SP005',
                'dttTensanpham' => 'Ảnh sự kiện',
                'dttHinhanh' => 'images/tranh_bien.jpg',
                'dttSoluong' => 8,
                'dttDongia' => 750000,
                'dttMaloai' => 'L001',
                'dttTrangthai' => 1,
            ],
        ];

        // Chèn dữ liệu vào bảng
        DB::table('dttsanpham')->insert($products);
    }
}
