<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Configuration extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug;

    protected $fillable = [
        'company',
'segment',
'city',
'address',
'state',
'country',
'neighborhood',
'cep',
'phone',
'whatsapp',
'email',
'logoheader',
'logofooter',
'image',
'facebook',
'instagram',
'twitter',
'linkedin',
'youtube',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('segment')
            ->saveSlugsTo('slug');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200)
              ->sharpen(10);
    }
    public function getUrlCoverAttribute()
    {
        if (!empty($this->cover)){
            return Storage::url(Cropper::thumb($this->cover, 900, 506));
        }
        return 'https://via.placeholder.com/1366x768?text=IMAGEN NÃO ENCONTRADA';
    }
}
