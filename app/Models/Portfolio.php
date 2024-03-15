<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {
    use HasFactory;
    protected $fillable = [
        'user_id',
        'myname',
        'father',
        'mother',
        'dob',
        'blood_group',
        'social_id',
        'passport_no',
        'cell_no',
        'emergency_contact_no',
        'email',
        'whatsapp',
        'linkedin',
        'facebook',
        'github',
        'behance',
        'portfolio',
        'degree_type',
        'education',
    ];
}
