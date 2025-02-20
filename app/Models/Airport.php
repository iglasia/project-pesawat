<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Airport extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'iata_code',
        'name',
        'image',
        'city',
        'country',
    ];

    public function segments()
    {
        return $this->hasMany(FlightSegment::class);
    }
}
