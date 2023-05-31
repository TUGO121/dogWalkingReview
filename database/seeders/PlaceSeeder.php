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
                'name' => 'レイクタウン',
                'address' => '埼玉県越谷市レイクタウン4-1-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
             'id' => 2,
                'name' => '健康福祉村',
                'address' => '埼玉県越谷市東大沢北後谷82',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 3,
                'name' => '越谷市梅林公園',
                'address' => '埼玉県越谷市大林203-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 4,
                'name' => '出羽公園',
                'address' => '埼玉県越谷市七左町4-222',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 5,
                'name' => '越谷総合公園',
                'address' => '埼玉県越谷市増林3-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 6,
                'name' => '平方公園',
                'address' => '埼玉県越谷市平方2402',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 7,
                'name' => '千間台第四公園',
                'address' => '埼玉県越谷市千間台西4-2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 8,
                'name' => 'キャンベルタウン公園',
                'address' => '埼玉県越谷市東大沢5-10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 9,
                'name' => '元荒川',
                'address' => '埼玉県越谷市大沢1-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
            'id' => 10,
                'name' => '綾瀬川',
                'address' => '埼玉県越谷市大間野1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
               
    }
}