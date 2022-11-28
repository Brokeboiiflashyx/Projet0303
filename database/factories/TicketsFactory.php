<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Titre' => $this->faker->title(),
            'Description' => $this->faker->realText(  200, 2),
            'Statut' => $this->statut(),

        ];
    }
    public function statut ()
    {
        $status = ['En cours', 'Terminé', 'En attente'];
        return $status[array_rand($status)];
    }
}


