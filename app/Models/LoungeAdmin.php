<?php

namespace App\Models;

use App\Models\Lounge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoungeAdmin extends Model
{
    protected $fillable = [
        'lounge_id',
    ];

    public function lounge(): BelongsTo
    {
        return $this->belongsTo(Lounge::class);
    }
}
