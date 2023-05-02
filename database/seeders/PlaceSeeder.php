<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('places')->insert([
            [
                'id' => 1,
                'name' => '○○ドッグラン',
                'address' => '○○県○○市',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
             'id' => 2,
                'name' => '○○',
                'address' => '東京都○○市',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
               
    }
}
