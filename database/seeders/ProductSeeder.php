<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Long chair',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 200,
                'size' => 'M',
                'category_id' => 1,
                'star' => false,
            ],
            [
                'name' => 'Table Clouburg',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 800,
                'size' => 'XL',
                'category_id' => 2,
                'star' => false,
            ],
            [
                'name' => 'Magical Mirror',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 350,
                'size' => 'S',
                'category_id' => 3,
                'star' => true,
            ],
            [
                'name' => 'Picasso was here',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 20000,
                'size' => 'S',
                'category_id' => 4,
                'star' => false,
            ],
            [
                'name' => 'Cabinet but not wc',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 100,
                'size' => 'XL',
                'category_id' => 5,
                'star' => false,
            ],
            [
                'name' => 'Desk chair',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 99,
                'size' => 'M',
                'category_id' => 1,
                'star' => false,
            ],
            [
                'name' => 'Desk table',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 100,
                'size' => 'L',
                'category_id' => 2,
                'star' => false,
            ],
            [
                'name' => 'Knife of my life',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 10,
                'size' => 'M',
                'category_id' => 3,
                'star' => false,
            ],
        ]);
    }
}
