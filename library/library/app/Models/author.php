<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
   protected $fillable =[
        'name',
        'country'
        
    ];
public function books(): HasMany
{
    return $this->hasMany(Book::class);
}

}
