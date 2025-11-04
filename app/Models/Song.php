<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name', 
        'runtime', 
        'artist', 
        'release_date',
        'album_id',
    ];

    public function album()
    {
    return $this->belongsTo(Album::class);
    }
}
