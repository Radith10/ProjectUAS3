<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pemesan' => $this->faker->name,
            'no_hp' => $this->faker->phoneNumber,
            'waktu_pesan' => $this->faker->dateTime,
            'waktu_terima' => $this->faker->dateTimeBetween('now', '+1 week'),
        ];
    }
}
