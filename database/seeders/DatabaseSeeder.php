<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Groupe;
use App\Models\Personnage;
use App\Models\Post;
use App\Models\User;
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

        $personnages = Personnage::factory(5)->create();
        $groupes = Groupe::factory(5)->create();


        User::factory(10)->create()->each(function($user) use ($personnages , $groupes)
        {
            Post::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'personnage_id' => ($personnages ->random(1)->first())->id,
                'groupe_id' => ($groupes ->random(1)->first())->id

            ]);

        });
    }
}
