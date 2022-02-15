<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Register;
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'username' => $this->faker->userName(),
          'eposta' => $this->faker->unique()->safeEmail(),
          'password' => $this->faker->password(),


        ];
    }
}
