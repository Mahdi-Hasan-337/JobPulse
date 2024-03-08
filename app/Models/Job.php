<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $fillable = ['title', 'description', 'benefits', 'location', 'deadline'];

    use HasFactory;
}
