<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_theme extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'theme_id'
    ];

}
