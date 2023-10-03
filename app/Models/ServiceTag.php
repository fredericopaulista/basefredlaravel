<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTag extends Model
{
    use HasFactory;
    protected $table = 'service_tag';

    public function services(){

        return $this->belongsTo(Service::class);
    }
    public function tags(){

        return $this->belongsToMany(Tag::class);
    }
}
