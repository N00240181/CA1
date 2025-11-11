<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'description', 'picture_url'];

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }
}
