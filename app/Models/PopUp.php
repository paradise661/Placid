<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopUp extends Model
{
    use HasFactory;
    protected $fillable = [
        "order",
        "status",
        "title",
        "link",
        "description",
        "image"
    ];
}
