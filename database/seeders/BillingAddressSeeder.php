<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billing_addresses')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'user_id' => 1,
            ]
        ]);
    }
}
