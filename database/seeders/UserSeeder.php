<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            [
                'id' => '1',
                'name' => '田中雄太',
                'email' => '○○＠○○.com',
                'password' => '××',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                 'id' => '2',
                'name' => '田中翔太',
                'email' => '○○＠iiS.com',
                'password' => '××',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                 'id' => '3',
                'name' => '斎藤裕子',
                'email' => '○○＠fnaoS.com',
                'password' => '××',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
