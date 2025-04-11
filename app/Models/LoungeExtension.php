<?php

namespace App\Models;

use App\Models\Lounge;
use App\Models\Manager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


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

    public function managers(): HasMany
    {
        return $this->hasMany(Manager::class);
    }

    public function waiters(): HasMany
    {
        return $this->hasMany(Manager::class);
    }
}
