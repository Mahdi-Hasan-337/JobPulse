<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $fillable = ['user_id', 'title', 'description', 'benefits', 'location', 'deadline'];

    use HasFactory;
}
