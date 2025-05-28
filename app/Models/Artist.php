<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';

    protected $fillable = [
        'name', 'description'
    ];

    public function works()
    {
        return $this->hasMany(Work::class, 'artist_id', 'id');
    }
}
