<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationMenu extends Model
{
    use HasFactory;

    protected $table = 'reservation_menus';

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
