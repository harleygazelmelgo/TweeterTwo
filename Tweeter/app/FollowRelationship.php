<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowRelationship extends Model
{
    protected $table = 'follow_relationship';

    function user() {
        return $this-belongsTo('App\User');
    }


}
