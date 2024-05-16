<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function getFullNameAttribute()  {
        return "{$this->first_name} {$this->last_name}" ;
    }
}
