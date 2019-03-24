<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    protected $table = 'sliders';

    protected $fillable = [ 'id', 'image', 'price', 'ingredient', 'created_at', 'updated_at'];
}
