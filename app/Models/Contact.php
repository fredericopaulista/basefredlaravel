<?php

namespace App\Models;

use App\Mail\Contato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class Contact extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'whatsapp', 'subject', 'message'];

    public static function boot() {

        parent::boot();
        
        static::created(function ($item) {

            $adminEmail = env('APP_EMAIL');
            FacadesMail::to($adminEmail)->send(new Contato($item));
        });
    }

}
