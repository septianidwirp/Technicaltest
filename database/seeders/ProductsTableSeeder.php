<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $data = [];

        for ($i = 0; $i < 1000; $i++) {
            $data[] = [
                'ProductName' => $faker->word
            ];
        }

        DB::table('Products')->insert($data);
    }
}
