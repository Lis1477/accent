<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['locality_id', 'parent_id', 'name', 'slug'];

    public function regionCities(): HasMany
    {
        return $this->hasMany(City::class, 'parent_id', 'locality_id')
            ->orderBy('name');
    }
}
