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
        $this->call(UserSeeder::class);
        $this->call(SkalaSeeder::class);
        $this->call(SoalSeeder::class);

        $this->call(PelatihanSeeder::class);
        $this->call(TestSoalSeeder::class);
    }
}
