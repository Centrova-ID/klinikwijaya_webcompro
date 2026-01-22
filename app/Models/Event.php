<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'featured_image',
        'event_date',
        'location',
        'user_id',
        'status'
    ];

    protected $casts = [
        'event_date' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->title);
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
