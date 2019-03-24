<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [ 'id', 'name', 'category', 'price', 'ingredient','image', 'created_at', 'updated_at' ];
}
