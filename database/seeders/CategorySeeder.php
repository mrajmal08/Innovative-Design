<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Living Room',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Bed Room',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Kitchen',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Office Room',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Dinning Room',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Bath Room',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ]);
    }
}
