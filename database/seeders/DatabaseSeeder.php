<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
                RoleSeeder::class,
                AvatarSeeder::class,
                UserSeeder::class,
                BillingAddressSeeder::class,
                TeamsSeeder::class,
                InfoSeeder::class,
                ArticleCategorySeeder::class,
                ArticleSeeder::class,
                CategorySeeder::class,
                TagSeeder::class,
                ProductSeeder::class,
                ImageSeeder::class,
                BannerSeeder::class,
                CommentSeeder::class,
                ReviewSeeder::class,
                DiapoSeeder::class,
                PpSeeder::class,
            ]
        );
    }
}
