<?php

namespace App\Models;

use App\Models\LoungeAdmin;
use App\Models\LoungeExtension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Lounge extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'website',
    ];

    protected $casts = [
        'telephones' => 'array',
    ];

    public function lounge_extensions(): HasMany
    {
        return $this->hasMany(LoungeExtension::class);
    }

    public function lounge_admins(): HasMany
    {
        return $this->hasMany(LoungeAdmin::class);
    }
}
