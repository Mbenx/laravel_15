<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeeInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <= 7; $i++) {
            DB::table('employee_inventory')->insert([
                'employee_id' => $faker->numberBetween($min = 1, $max = 8),
                'inventory_id' => $faker->numberBetween($min = 1, $max = 3),
                'description' => "Data Peminjaman yang ke". $i+1,
                'created_at' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
            ]);
        }
    }
}
