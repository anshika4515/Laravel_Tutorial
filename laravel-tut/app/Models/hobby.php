<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hobby extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'hobby',
        'time',
    ];
}
