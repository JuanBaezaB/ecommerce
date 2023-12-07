<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'commune_id',
        'street',
        'number',
        'apartment',
        'postal_code',
        'reference',
        'latitude',
        'longitude',
        'validated',
    ];

    public function markAsValid()
    {
        $this->validated = true;
        $this->save();
    }

    public function markAsInvalid()
    {
        $this->is_valid = false;
        $this->save();
    }

    public function addressable()
    {
        return $this->morphTo();
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function getFullAddressAttribute()
    {
        return "{$this->street} {$this->number} {$this->apartment}, {$this->commune->name}, {$this->commune->province->name}";
    }

    public function getFullAddressForMapAttribute()
    {
        return "{$this->street} {$this->number} {$this->apartment}, {$this->commune->name}, {$this->commune->province->name}, {$this->commune->province->region->name}";
    }


}
