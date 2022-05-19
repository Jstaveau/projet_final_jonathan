<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'title' => 'PRODUCT LIST VIEW',
                'image_id' => 1,
            ],
            [
                'title' => 'BLOG',
                'image_id' => 2,
            ],
            [
                'title' => 'ABOUT US',
                'image_id' => 3,
            ],
            [
                'title' => 'CONTACT US',
                'image_id' => 4,
            ],
            [
                'title' => 'MY ACCOUNT',
                'image_id' => 5,
            ],
            [
                'title' => 'CHECK OUT',
                'image_id' => 6,
            ],
            [
                'title' => 'ORDER COMPLETE',
                'image_id' => 7,
            ],
            [
                'title' => 'SHOPPING CART',
                'image_id' => 8,
            ],
            [
                'title' => 'REGISTRATION',
                'image_id' => 9,
            ],
        ]);
    }
}
