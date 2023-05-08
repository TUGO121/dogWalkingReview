<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('reviews')->insert([
            [ 
                'id' => '1',
                'user_id' => '1',
                'category_id' => '1',
                'place_id' => '1',
                'text' => 'ここはいい！！',
                'stars' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '2',
                'user_id' => '1',
                'category_id' => '2',
                'place_id' => '1',
                'text' => 'ここはいい！！',
                'stars' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '3',
                'user_id' => '1',
                'category_id' => '2',
                'place_id' => '1',
                'text' => 'ここはいい！！',
                'stars' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => '4',
                'user_id' => '1',
                'category_id' => '3',
                'place_id' => '1',
                'text' => 'ここはいい！！',
                'stars' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
