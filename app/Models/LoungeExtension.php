<?php

namespace App\Models;

use App\Models\Lounge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class LoungeExtension extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'lounge_id',
    ];

    protected $casts = [
        'telephones' => 'array',
    ];

    public function lounge(): BelongsTo
    {
        return $this->belongsTo(Lounge::class);
    }
}
