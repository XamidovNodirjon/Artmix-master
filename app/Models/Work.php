<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';

    protected $fillable = ['image_name','images','size','materials','artist_id'];

    public function artists()
    {
        return $this->hasOne(Artist::class, 'id', 'artist_id');
    }
}
