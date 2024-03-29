<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoName extends Model {
    use HasFactory;
    protected $table = 'logo_names';
    protected $fillable = [
        'name',
        'image',
    ];
}
