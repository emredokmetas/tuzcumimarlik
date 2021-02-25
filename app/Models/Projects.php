<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = [
        "id",
        "type",
        "slug",
        "title",
        "keywords",
        "description",
        "cover",
        "homeCover",
        "homeAdd",
        "content",
        "options",
        "state",
    ];

}
