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
        'message',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
