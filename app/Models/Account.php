<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    protected $fillable = [
        'username',
        'accountable__id',
        'accountable__type',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
