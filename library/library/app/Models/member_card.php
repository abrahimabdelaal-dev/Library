<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member_card extends Model
{
protected $fillable =[
        'member_id',
        'card_number',
        'expires_at'
        
    ];


    protected function casts(): array
{
    return [
        'expires_at' => 'date',
    ];
}

public function member(): BelongsTo
{
    return $this->belongsTo(Member::class);
}
}
