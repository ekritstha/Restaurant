<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [ 'id', 'event_title', 'event_details', 'location', 'date', 'time', 'created_at', 'updated_at', 'image' ];
}
