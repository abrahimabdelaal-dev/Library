<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable =[
        'title',
        'year',
        'pages',
        'author_id'
        
    ];
    public function author(): BelongsTo
{
    return $this->belongsTo(Author::class);
}

public function genres(): BelongsToMany
{
    return $this->belongsToMany(Genre::class, 'book_genres');
}
}
