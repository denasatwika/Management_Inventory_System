<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
            $this->call([
                CategorySeeder::class,
                ProductSeeder::class,
                StatusSeeder::class,
            ]);
        // \App\Models\User::factory(10)->create();
    }
}
