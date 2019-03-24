<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slidehead extends Model
{
    protected $table = 'slideheads';

    protected $fillable = [ 'id', 'image', 'title', 'order', 'description', 'created_at', 'updated_at' ];
}
