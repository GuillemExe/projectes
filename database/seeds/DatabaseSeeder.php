<?php

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
        factory(App\Projecte::class, 50)->create()->each(function($projecte) {
            $projecte->tasques()->save(factory(App\Tasca::class)->make());
        });
    }
}