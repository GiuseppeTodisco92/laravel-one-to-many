<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    //protezione dei campi 

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
