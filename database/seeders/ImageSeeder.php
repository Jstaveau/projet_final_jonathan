<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'name' => 'banner1',
                'src' => 'banner1.jpg',
            ],
            [
                'name' => 'banner2',
                'src' => 'banner2.jpg',
            ],
            [
                'name' => 'banner3',
                'src' => 'banner3.jpg',
            ],
            [
                'name' => 'banner4',
                'src' => 'banner4.jpg',
            ],
        ]);
    }
}
