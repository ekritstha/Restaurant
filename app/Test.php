<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = [ 'id', 'title', 'description','cname', 'source', 'created_at', 'updated_at'];
}
