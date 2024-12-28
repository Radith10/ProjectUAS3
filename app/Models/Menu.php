<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
    ];

    public function reservationMenus()
    {
        return $this->hasMany(ReservationMenu::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservation_menus');
    }
}
