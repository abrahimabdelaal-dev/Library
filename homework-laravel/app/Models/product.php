<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name',
        'price',
        'discount',
        'stock',
        'description',
        'is_available',
        'category_id'	

    ];

protected function casts(): array
{
    return [
        'price'        => 'decimal:2',
        'discount'     => 'decimal:2',
        'stock'        => 'integer',
        'is_available' => 'boolean',
    ];
}


}
