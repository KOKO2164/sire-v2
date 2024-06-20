<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'row',
        'column',
        'seat_area_id'
    ];
    public $timestamps = false;

    public function seatArea()
    {
        return $this->belongsTo(SeatArea::class);
    }
}
