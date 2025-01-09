<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeding extends Model
{
    use HasFactory;

    protected $table = "seeding";

    protected $fillable = [
        "name",
        "email",
        "address",
        "contact",
    ];
}
