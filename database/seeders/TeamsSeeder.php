<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Jean Fil',
                'post' => 'Big boss',
                'avatar_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet. Et suscipit odio aut unde nulla ea fuga molestias et laudantium assumenda. Qui dolor omnis non vitae sequi aut voluptas error. Eum alias minima non quidem animi et illum nobis sed voluptatem atque sit minima necessitatibus nam voluptas adipisci.',
                'boss' => true,
            ],
            [
                'name' => 'Gérard Menfroi',
                'post' => 'Chauffagiste',
                'avatar_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet. Et suscipit odio aut unde nulla ea fuga molestias et laudantium assumenda. Qui dolor omnis non vitae sequi aut voluptas error. Eum alias minima non quidem animi et illum nobis sed voluptatem atque sit minima necessitatibus nam voluptas adipisci.',
                'boss' => false,
            ],
            [
                'name' => 'Alex Térieur',
                'post' => 'Videur',
                'avatar_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet. Et suscipit odio aut unde nulla ea fuga molestias et laudantium assumenda. Qui dolor omnis non vitae sequi aut voluptas error. Eum alias minima non quidem animi et illum nobis sed voluptatem atque sit minima necessitatibus nam voluptas adipisci.',
                'boss' => false,
            ],
            [
                'name' => 'Alain Térieur',
                'post' => 'Vigile',
                'avatar_id' => 4,
                'description' => 'Lorem ipsum dolor sit amet. Et suscipit odio aut unde nulla ea fuga molestias et laudantium assumenda. Qui dolor omnis non vitae sequi aut voluptas error. Eum alias minima non quidem animi et illum nobis sed voluptatem atque sit minima necessitatibus nam voluptas adipisci.',
                'boss' => false,
            ],
            [
                'name' => 'Phil Dentaire',
                'post' => 'Dentiste',
                'avatar_id' => 5,
                'description' => 'Lorem ipsum dolor sit amet. Et suscipit odio aut unde nulla ea fuga molestias et laudantium assumenda. Qui dolor omnis non vitae sequi aut voluptas error. Eum alias minima non quidem animi et illum nobis sed voluptatem atque sit minima necessitatibus nam voluptas adipisci.',
                'boss' => false,
            ],
        ]);
    }
}
