<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        "name",
        "profile_picture",
        "sample_song"
    ];
    
    protected $table = "artists";
}
