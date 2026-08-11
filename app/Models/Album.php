<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "album";
    protected $fillable = [
        "name",
        "cover_photo",
        "artist"
    ];
}
