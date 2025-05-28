<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class easel extends Model
{

    protected $casts = [
        'images' => 'array',
    ];

    protected $table = 'easels';

    protected $fillable = [
        'name', 'size', 'material', 'images'
    ];
}
