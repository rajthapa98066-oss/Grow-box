<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service_id',
        'budget',
        'contact_method',
        'timeline',
        'subject',
        'message',
        'status',
        'admin_notes',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
