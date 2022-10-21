<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'name' => 'Casas',
            'slug' => 'casas',
            'image' => 'casa.jpg',
        ]);
        Categoria::create([
            'name' => 'Apartamentos',
            'slug' => 'apartamentos',
            'image' => 'apar.jpg',
        ]);
        Categoria::create([
            'name' => 'Fincas',
            'slug' => 'fincas',
            'image' => 'finca.jpg',
        ]);
    }
}
