<?php

namespace Database\Seeders;

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
        $this->call([
            RoleSeeder::class
        ]);
        \App\Models\User::factory(5)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Commentaire::factory(20)->create();
    }
}
