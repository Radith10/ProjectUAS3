<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus data user sebelumnya
        DB::table('users')->where('email', 'radith23ti@mahasiswa.pcr.ac.id')->delete();

        // Membuat atau memperbarui data user
        User::updateOrCreate(
            ['email' => 'radith23ti@mahasiswa.pcr.ac.id'], // Kondisi unik
            [
                'name' => 'Radith',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'remember_token' => Str::random(10),
            ]
        );

        // Jalankan seeder lainnya
        $this->call([
            MenuSeeder::class,
            ReservationSeeder::class,
            ReservationMenuSeeder::class,
        ]);
    }
}

