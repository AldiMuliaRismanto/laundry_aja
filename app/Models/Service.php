<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'name_service',
        'price',
        'duration',
    ];
}
