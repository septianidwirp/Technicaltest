<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalespersonsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'SalesPersonName' => $faker->name
            ];
        }

        DB::table('Salespersons')->insert($data);
    }
}

