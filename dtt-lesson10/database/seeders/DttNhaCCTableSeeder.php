<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DttNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('dttnhacc')->insert([
            'dttMaNCC'=>$faker->uuid(),
            'dttTenNCC'=>$faker->sentence(5),
            'dttDiachi'=>$faker->address(),
            'dttDienthoai'=>$faker->phoneNumber(10),
            'dttemail'=>$faker->email()
            ]);

    }
    }
}