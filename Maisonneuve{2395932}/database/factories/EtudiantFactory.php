<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Ville;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'nom' => $this->faker->sentence,
            'addresse' =>  $this->faker->sentence,
            'telephone' =>  $this->faker->sentence,
            'email' => $this->faker->sentence,
            'date_naissance' =>$this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'ville_id' =>  Ville::factory()
        ];
    }
}
