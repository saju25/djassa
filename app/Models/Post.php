<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'description',
        'best_price',
        'discounted_price',
        'color',
        'weight',
        'size',
        'add_category',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    protected $casts = [
        'color' => 'array',
        'weight' => 'array',
        'size' => 'array',
        'img_path' => 'array',
    ];

}
