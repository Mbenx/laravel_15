<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Finance', 'code' => 'F'],
            ['name' => 'IT Enginering', 'code' => 'IT'],
            ['name' => 'Administration', 'code' => 'ADM'],
            ['name' => 'Operation', 'code' => 'OP'],
        ];

        foreach ($data as $d) {
            DB::table('departments')->insert([
                'name' => $d['name'],
                'code' => $d['code']
            ]);
        }
    }
}
