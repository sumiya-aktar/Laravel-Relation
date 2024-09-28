<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
 
class Customer extends Model
{
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}