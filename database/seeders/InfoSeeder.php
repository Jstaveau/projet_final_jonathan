<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'address' => '28 Green Tower, Street Name, New York City, USA',
                'phone' => '+880 1234 123456',
                'phone2' => '+880 1234 123456',
                'mail' => 'company-email@gmail.com',
                'mail2' => 'your-email@gmail.com',
            ]
        ]);
    }
}
