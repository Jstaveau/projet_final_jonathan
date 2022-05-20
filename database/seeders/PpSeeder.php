<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pps')->insert([

            [
                'name' => 'meuble1',
                'src' => 'meuble1.jpg',
                'product_id' => 1,
            ],
            [
                'name' => 'meuble2',
                'src' => 'meuble2.jpg',
                'product_id' => 2,
            ],
            [
                'name' => 'meuble3',
                'src' => 'meuble3.jpg',
                'product_id' => 3,
            ],
            [
                'name' => 'meuble4',
                'src' => 'meuble4.jpg',
                'product_id' => 4,
            ],
            [
                'name' => 'meuble5',
                'src' => 'meuble5.jpg',
                'product_id' => 5,
            ],
            [
                'name' => 'meuble6',
                'src' => 'meuble6.jpg',
                'product_id' => 6,
            ],
            [
                'name' => 'meuble7',
                'src' => 'meuble7.jpg',
                'product_id' => 7,
            ],
            [
                'name' => 'meuble8',
                'src' => 'meuble8.jpg',
                'product_id' => 8,
            ],
        ]);
    }
}