<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug;

    protected $fillable = [
        'print',
        'main',
        'name',
        'description',
        'slug',
        'title',
        'seoDescription',

    ];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function setPrintAttribute($value)
    {
        $this->attributes['print'] = ($value == '1' ? 1 : 0);
    }
    public function setMainAttribute($value)
    {
        $this->attributes['main'] = ($value == '1' ? 1 : 0);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200)
              ->sharpen(10);
    }
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucwords($value),
            set: fn (string $value) => ucwords($value),
        );
    }
    public function categoryservices(){

        return $this->hasMany(CategoryService::class, 'service_id');
    }
    public function services(){

        return $this->belongsToMany(Service::class);
    }


}
