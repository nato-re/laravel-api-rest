<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "artists";
    protected $fillable = [
        "name",
        "age",
        "profile_picture",
    ];
}
