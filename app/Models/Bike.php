<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'type',
        'rent_price',
        'gear_count',
        'image',
        'available',
    ];

    protected $casts = [
        'rent_price' => 'decimal:2',
        'gear_count' => 'integer',
        'available' => 'boolean',
    ];
}
