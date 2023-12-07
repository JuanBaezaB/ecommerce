<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'rom',
    ];

    public function communes()
    {
        return $this->hasManyThrough(Commune::class, Province::class);
    }

    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class);
    }

}
