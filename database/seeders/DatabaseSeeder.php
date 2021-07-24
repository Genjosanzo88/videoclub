<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('movies')->insert([
        [
            'name' => 'Matrix',
            'description' => 'Una de las mejores peliculas.',
            'quantity' => 5,
            'release_date' => 1990,
        ],
        [
            'name' => 'Titanic',
            'description' => 'Una de las mejores peliculas.',
            'quantity' => 4,
            'release_date' => 1997,
        ],
        [
            'name' => 'Space Jam',
            'description' => 'Una de las mejores peliculas.',
            'quantity' => 7,
            'release_date' => 1996,
        ]
        ]);
    }
}
