<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artist';
    protected $fillable = [
        "name",
        "profile_photo",
        "external_link",
        "song_sample"
    ];

}
