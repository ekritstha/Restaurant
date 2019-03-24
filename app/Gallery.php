<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = [ 'id', 'name','category', 'created_at', 'updated_at' , 'image'];
}
