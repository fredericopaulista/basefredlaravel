<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug;


    protected $fillable = [
        'print',
        'home',
        'name',
        'title',
        'subtitle',
        'briefDescription',
        'description',
        'video',
        'videoTitle',
        'slug'
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
    public function setHomeAttribute($value)
    {
        $this->attributes['home'] = ($value == '1' ? 1 : 0);
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
    public function categories(){

        return $this->belongsToMany(Category::class);
    }

    public function tags(){

    return $this->hasMany(Tag::class);
    }
    public function servicefaqs(){

        return $this->hasMany(ServiceFaq::class);
    }

}
