<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    function user() {
        return $this->belongsTo('App\User');
    }

}
