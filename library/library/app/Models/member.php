<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
   protected $fillable =[
        'name',
        'email'
        
    ];

public function card(): HasOne
{
    return $this->hasOne(member_card::class);
}
}
