<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save_game extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'monsters_id',
        'monsters_life',
        'token',
        'current_theme'
    ];

}
