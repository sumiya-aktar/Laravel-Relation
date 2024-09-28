<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Mechanic extends Model
{
    use HasFactory;
    
    public function owner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }

    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
