<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'avatar_id' => 9,
                'role_id' => 1,
                'password'=>bcrypt('admin@admin.com')
            ],
            [
                'name'=>'webmaster',
                'email'=>'webmaster@webmaster.com',
                'avatar_id' => 10,
                'role_id' => 2,
                'password'=>bcrypt('webmaster@webmaster.com')
            ],
            [
                'name'=>'redacteur',
                'email'=>'redacteur@redacteur.com',
                'avatar_id' => 11,
                'role_id' => 3,
                'password'=>bcrypt('redacteur@redacteur.com')
            ],
            [
                'name'=>'stock',
                'email'=>'stock@stock.com',
                'avatar_id' => 12,
                'role_id' => 4,
                'password'=>bcrypt('stock@stock.com')
            ],
            [
                'name'=>'user',
                'email'=>'user@user.com',
                'avatar_id' => 13,
                'role_id' => 5,
                'password'=>bcrypt('user@user.com')
            ],
        ]);
    }
}
