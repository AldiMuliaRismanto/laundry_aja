<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'date_of_entry',
        'service',
        'user',
        'status',
        'the_amount_of_goods',
        'total',
        'pick_up_date'
    ];
}
