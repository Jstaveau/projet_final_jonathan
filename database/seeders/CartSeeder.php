<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'user_id'=>1,
            ],
            [
                'user_id'=>2,
            ],
            [
                'user_id'=>3,
            ],
            [
                'user_id'=>4,
            ],
            [
                'user_id'=>5,
            ],
        ]);
    }
}
