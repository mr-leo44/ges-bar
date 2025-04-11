<?php

namespace App\Models;

use App\Models\Account;
use App\Models\LoungeExtension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Manager extends Model
{
    protected $fillable = [
        'lounge_extension_id',
    ];

    public function lounge_extension() : BelongsTo
    {
        return $this->belongsTo(LoungeExtension::class);
    }

    public function account():MorphOne
    {
        return $this->morphOne(Account::class, 'accountable');
    }
}
