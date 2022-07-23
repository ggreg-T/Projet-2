<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rubrique;
use App\Models\Post;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $rubrique = rubrique::factory(5)->create();

        User::factory(5)->create()->each(function ($user) use ($rubrique)
        {
        Post::factory(rand(1, 3))->create(
            [
            'user_id' => $user->id,
            'rubrique_id' => ($rubrique->random(1)->first())->id,
            ]);
        });
    }
}
