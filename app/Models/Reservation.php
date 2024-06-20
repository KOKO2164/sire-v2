<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'price',
        'status_id',
        'user_id',
        'show_id',
        'seat_id'
    ];

    public function status()
    {
        return $this->belongsTo(ReservationStatus::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
