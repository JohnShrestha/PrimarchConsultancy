<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commons')->insert(
            [
                'footer_first_title'                    => 'PECM.',
                'footer_first_description'              => 'PECM',
                'footer_second_title'                   => 'PECM',
                'footer_second_description'             => 'PECM',
                'footer_third_title'                     => 'PECM',
                'footer_third_description'               => 'PECM',
                'footer_fourth_title'                    => 'PECM',
                'footer_fourth_description'               => 'PECM',
            ]
        );
    }
}
