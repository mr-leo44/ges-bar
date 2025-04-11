<?php

namespace App\Models;

use App\Models\LoungeExtension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Waiter extends Model
{
    protected $fillable = [
        'lounge_extension_id',
    ];

    public function lounge_extension() : BelongsTo
    {
        return $this->belongsTo(LoungeExtension::class);
    }
}
