<?php

namespace Database\Seeders;

use App\Models\Menu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 1 user
        User::create([
            'name' => 'Radith',
            'email' => 'radith23ti@mahasiswa.pcr.ac.id',
            'password' => Hash::make('password123'),
        ]);

        $this->call([
            MenuSeeder::class,
            ReservationSeeder::class,
            ReservationMenuSeeder::class,
        ]);
    }
}
