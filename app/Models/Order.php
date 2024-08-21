<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'add_id',
        'user_id',
        'color',
        'size',
        'weight',
        'total_amount',
        'city',
        'number',
        'zip_code',
    ];
}
