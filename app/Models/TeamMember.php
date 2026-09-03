<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','position','bio','photo','skills','email','linkedin_url','github_url','is_active','sort_order'];

    protected $casts = ['skills' => 'array', 'is_active' => 'boolean'];
}
