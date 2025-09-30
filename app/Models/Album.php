<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'release_date', 'runtime', 'album_url', 'album_cover', 'spotify_link'];
    public $timestamps = false;
}
