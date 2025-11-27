<?php

namespace App\Models;
use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'release_date', 
        'runtime', 
        'album_url', 
        'album_cover', 
        'spotify_link',
    ];
    public $timestamps = false;

    /* Defines the one to many relationship with songs */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    /* Defines the many to many relationship with artists */
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}