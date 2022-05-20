<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiapoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diapos')->insert([
            [
                'src' => 'diapo1.jpg',
                'first' => false,
            ],
            [
                'src' => 'diapo2.jpg',
                'first' => true,
            ],
            [
                'src' => 'diapo3.jpg',
                'first' => false,
            ],
            [
                'src' => 'diapo4.jpg',
                'first' => false,
            ],
            [
                'src' => 'diapo5.jpg',
                'first' => false,
            ],
        ]);
    }
}
