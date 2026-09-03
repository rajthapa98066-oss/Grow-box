<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'excerpt',
        'description',
        'features',
        'technologies',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'technologies' => 'array',
        'is_active' => 'boolean',
    ];
}
