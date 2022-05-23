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
                'name' => 'long chair',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 200,
                'discount' => 10,
                'size' => 'M',
                'category_id' => 1,
                'new'=>false,
                'star' => false,
            ],
            [
                'name' => 'table Clouburg',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 800,
                'discount' => 20,
                'size' => 'XL',
                'category_id' => 2,
                'new'=>true,
                'star' => false,
            ],
            [
                'name' => 'magical Mirror',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 350,
                'discount' => null,
                'size' => 'S',
                'category_id' => 3,
                'new'=>false,
                'star' => true,
            ],
            [
                'name' => 'picasso was here',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 20000,
                'discount' => null,
                'size' => 'S',
                'category_id' => 4,
                'new'=>false,
                'star' => false,
            ],
            [
                'name' => 'cabinet but not wc',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 100,
                'discount' => null,
                'size' => 'XL',
                'category_id' => 5,
                'new'=>false,
                'star' => false,
            ],
            [
                'name' => 'desk chair',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 99,
                'discount' => null,
                'size' => 'M',
                'category_id' => 1,
                'new'=>false,
                'star' => false,
            ],
            [
                'name' => 'desk table',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 100,
                'discount' => null,
                'size' => 'L',
                'category_id' => 2,
                'new'=>false,
                'star' => false,
            ],
            [
                'name' => 'knife of my life',
                'description' => "There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin going to use a passage embarrassing.",
                'price' => 10,
                'discount' => null,
                'size' => 'M',
                'category_id' => 3,
                'new'=>true,
                'star' => false,
            ],
        ]);
    }
}
