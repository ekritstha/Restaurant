<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $fillable = [ 'id', 'name', 'designation','created_at', 'updated_at' , 'image'];
}
