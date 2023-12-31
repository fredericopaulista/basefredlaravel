<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFaq extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'service_id'
    ];
    public function services(){

        return $this->belongsToMany(Service::class);
    }
}
