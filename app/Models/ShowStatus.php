<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowStatus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    public function shows()
    {
        return $this->hasMany(Show::class);
    }
}
