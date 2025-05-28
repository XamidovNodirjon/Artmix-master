<?php

namespace App\traits;

use App\Models\Artist;
use App\Models\easel;

trait ImagesTrait
{
    public function getEaselTrait($id)
    {
        $easel = easel::findOrfail($id);
        return $easel;
    }

    public function getArtist($id)
    {
        $artist = Artist::with('works')->find($id);
        return $artist;
    }

}
