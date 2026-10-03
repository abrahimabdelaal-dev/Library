<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book_genre extends Model
{
    protected $fillable =[
        'book_id',
        'genre_id'
        
    ];
}
