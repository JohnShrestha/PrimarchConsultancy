<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = array(
            array(
                'title' => 'Language Preparation',
                'slug' => \Str::slug('Language Preparation'),
                'unique_id' => env("APPLICATION_SERIAL", 2079) . "" . date("dHis") . rand(0000, 9999),
                'status' => 1
            ),
            array(
                'title' => 'Study Abroad',
                'slug' => \Str::slug('Study Abroad'),
                'unique_id' => env("APPLICATION_SERIAL", 2079) . "" . date("dHis") . rand(0000, 9999),
                'status' => 1
            ),
        );

        DB::table('blog_categories')->insert($category);
    }
}
