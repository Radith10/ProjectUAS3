<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Reservation;
use App\Models\ReservationMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationMenu>
 */
class ReservationMenuFactory extends Factory
{
    protected $model = ReservationMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $menu = Menu::inRandomOrder()->first();
        $jumlah = $this->faker->numberBetween(1, 10);

        return [
            'reservation_id' => Reservation::inRandomOrder()->first()->id,
            'menu_id' => $menu->id,
            'jumlah' => $jumlah,
            'total_harga' => $menu->harga * $jumlah,
        ];
    }
}
