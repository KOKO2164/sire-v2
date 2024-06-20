<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'duration',
        'status_id',
        'image_id'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function status()
    {
        return $this->belongsTo(ShowStatus::class);
    }

    public function seatAreaPrices()
    {
        return $this->hasMany(SeatAreaPrice::class);
    }
}
