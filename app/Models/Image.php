<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function shows()
    {
        return $this->hasMany(Show::class);
    }
}
