<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'sku',
        'description',
        'best_price',
        'discounted_price',
        'color',
        'weight',
        'size',
        'add_category',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Automatically set the slug before saving
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
    protected $casts = [
        'color' => 'array',
        'weight' => 'array',
        'size' => 'array',
        'img_path' => 'array',
    ];

}
