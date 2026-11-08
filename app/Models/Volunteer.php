<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'event_id',
        'message', 'group_size', 'photo_waiver', 'attended_before', 'residence', 'heard_about', 'dietary_needs',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
