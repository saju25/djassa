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
        'post_by_user',
        'quantity',
        'color',
        'size',
        'weight',
        'total_amount',
        'city',
        'number',
        'zip_code',
        'dcompany',
        'status',
    ];
}
