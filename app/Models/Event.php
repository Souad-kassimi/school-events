<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable=[
        "event","responsable","time","event_day","message","guests","photo","categorie_id"
    ];
    protected $casts = [
        'time' => 'datetime',
        
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (is_null($event->message)) {
                $event->message = "Join us for an inspiring event where students and teachers come together to share ideas, collaborate on exciting projects, and create lasting memories. Let's make this a celebration of creativity, learning, and teamwork!";
            }
        });
    }
}
