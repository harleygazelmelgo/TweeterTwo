<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table = 'tweet';
    public $timestamps = false;

    function user() {
        return $this->belongsTo('App\User');
    }

    function likes() {
        return $this->hasMany('App\Likes');
    }

    function comments() {
        return $this->hasMany('App\Comments');
    }

}
