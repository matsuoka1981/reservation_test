<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'name' => '東京',
            ],
            [
                'name' => '大阪',
            ],
            [
                'name' => '福岡',
            ],
        ]);
    }
}
