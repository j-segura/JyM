<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\Zone;
use App\Models\Home;

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
        $this->call(CategoriaSeeder::class);
        Location::factory(20)->create();
        Zone::factory(4)->create();
        Home::factory(50)->create();
    }
}
