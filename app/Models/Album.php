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

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}