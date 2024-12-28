<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = Menu::all();
        $reservations = Reservation::all();

        foreach ($reservations as $reservation) {
            // Mengaitkan 1 hingga 5 menu secara acak ke setiap reservasi
            $reservation->menus()->attach($menus->random(rand(1, 5))->pluck('id')->toArray());
        }
    }
}
