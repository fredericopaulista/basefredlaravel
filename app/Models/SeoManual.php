<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SeoManual extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['seo_title', 'seo_url', 'seo_description', 'seo_og_title', 'seo_og_image', 'seo_og_description'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200)
              ->sharpen(10);
    }
}
