<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'print',
        'home',
        'title',
        'subtitle',
        'briefDescription',
        'description',
        'image',
        'video',
        'videoTitle',
        'slug'
    ];

    public function categories(){

        return $this->belongsToMany(Category::class);
    }
    public function tags()
{
    return $this->hasMany(Tag::class);
}

}
