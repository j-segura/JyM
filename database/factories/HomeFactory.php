<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use app\Models\Categoria;
use app\Models\Location;
use app\Models\Zone;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->word();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'metrosCuadrados' => $this->faker->randomElement([32, 50, 65, 100, 120, 160, 200]),
            'valor' => $this->faker->randomElement([
                '100.000.000',
                '99.999.000',
                '150.000.000',
                '187.000.000',
                '200.000.000',
            ]),
            'direccion' => 'Calle 13 #82 -129',
            'image' => $this->faker->randomElement([
                'casa1.jpg',
                'casa2.jpg',
                'departamento.jpg',
            ]),
            'descripcion' => $this->faker->text(500),
            'categoria_id' => Categoria::all()->random()->id,
            'location_id' => Location::all()->random()->id,
            'zone_id' => Zone::all()->random()->id,
        ];
    }
}
