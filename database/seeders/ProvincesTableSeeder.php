<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('provinces')->insert([
                'province_en' => "Province No. 1",
            ]);
            DB::table('provinces')->insert([
                'province_en' => "Province No. 2",
            ]);
            DB::table('provinces')->insert([
                'province_en' => "Bagmati Pradesh",
            ]);
            DB::table('provinces')->insert([
                'province_en' => "Gandaki Pradesh",
            ]);
            DB::table('provinces')->insert([
                'province_en' => "Province No. 5",
            ]);
            DB::table('provinces')->insert([
                'province_en' => "Karnali Pradesh",
            ]);
            DB::table('provinces')->insert([
                'province_en' => "Sudurpashchim Pradesh",
            ]);
        }
    }
}
