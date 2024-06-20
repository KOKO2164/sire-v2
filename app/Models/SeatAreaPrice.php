<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAreaPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'show_id',
        'seat_area_id'
    ];
    public $timestamps = false;

    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function seatArea()
    {
        return $this->belongsTo(SeatArea::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
