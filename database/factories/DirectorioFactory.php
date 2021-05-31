<?php

namespace Database\Factories;

use App\Models\Directorio;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Directorio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'id_tipo_persona' => $this->faker->randomDigit(),
            'telefono' => $this->faker->numberBetween($min = 1000000000, $max = 9999999999),
            'email' => $this->faker->email(),
            'direccion' => $this->faker->address()
        ];
    }
}
