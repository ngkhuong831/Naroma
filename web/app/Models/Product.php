<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    USE HasSlug;
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'published',
        'in_stock',
        'price',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    public function product_images() {
        return $this->hasMany(ProductImages::class);
    }

    public function category() {
        return $this->hasMany(Category::class);
    }

    public function brand() {
        return $this->hasMany(Brand::class);
    }
}
