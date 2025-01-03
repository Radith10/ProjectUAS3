<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemesan',
        'no_hp',
        'waktu_pesan',
        'waktu_terima',
    ];

    public function reservationMenus()
    {
        return $this->hasMany(ReservationMenu::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'reservation_menus');
    }
}

