<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $data = [];

        for ($i = 0; $i < 2000000; $i++) {
            $data[] = [
                'SalesDate' => $faker->dateTimeThisDecade(),
                'ProductID' => rand(1, 1000),
                'SalesAmount' => $faker->randomFloat(2, 10, 1000),
                'SalesPersonID' => rand(1, 100)
            ];

            if ($i % 10000 == 0) {
                DB::table('Sales')->insert($data);
                $data = [];
            }
        }

        DB::table('Sales')->insert($data);
    }
}

