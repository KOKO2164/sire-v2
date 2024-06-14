<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    const ORGANIZER = 1;
    const CLIENT = 2;

    protected $fillable = ['name'];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
