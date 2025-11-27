<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'track_number',
        'name', 
        'runtime', 
        'artist', 
        'release_date',
        'album_id',
    ];

    /* Defines the one to many relationship with albums */
    public function album()
    {
    return $this->belongsTo(Album::class);
    }
}
