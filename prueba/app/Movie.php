<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'code', 'year', 'available'];

//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }

    public function genres()
    {
        return $this->belongsTo('App\Genre');
    }
}
