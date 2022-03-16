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
        // \App\Models\User::factory(10)->create();
        $this->call(GradoSeeder::class);
        $this->call(EscalafonSeeder::class);
        $this->call(ArmaSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(ExtensionSeeder::class);
        $this->call(EstadocivilSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(VacacionSeeder::class);
    }
}
