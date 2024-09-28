<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
class Phone extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}