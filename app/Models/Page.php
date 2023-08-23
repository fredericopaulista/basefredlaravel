<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'briefDescription',
        'status',
        'visible',
        'description'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ($value == '1' ? 1 : 0);
    }
    public function setVisibleAttribute($value)
    {
        $this->attributes['visible'] = ($value == '1' ? 1 : 0);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200)
              ->sharpen(10);
    }
}
