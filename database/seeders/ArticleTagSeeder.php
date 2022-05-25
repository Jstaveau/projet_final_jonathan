<?php

namespace Database\Seeders;

use App\Models\ArticleTag;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_tag')->insert([
            [
                'article_id'=> 1,
                'tag_id'=> 2,
            ],
            [
                'article_id'=> 1,
                'tag_id'=> 8,
            ],
            [
                'article_id'=> 2,
                'tag_id'=> 1,
            ],
            [
                'article_id'=> 2,
                'tag_id'=> 7,
            ],
            [
                'article_id'=> 3,
                'tag_id'=> 2,
            ],
            [
                'article_id'=> 3,
                'tag_id'=> 4,
            ],
            [
                'article_id'=> 4,
                'tag_id'=> 6,
            ],
            [
                'article_id'=> 4,
                'tag_id'=> 7,
            ],
            [
                'article_id'=> 5,
                'tag_id'=> 4,
            ],
            [
                'article_id'=> 5,
                'tag_id'=> 5,
            ],
            [
                'article_id'=> 6,
                'tag_id'=> 3,
            ],
            [
                'article_id'=> 6,
                'tag_id'=> 2,
            ],
            [
                'article_id'=> 7,
                'tag_id'=> 6,
            ],
            [
                'article_id'=> 7,
                'tag_id'=> 8,
            ],
        ]);
    }
}
