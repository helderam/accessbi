<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    public function groups()
    {
        return $this->hasMany('App\Group');
        #return $this->belongsToMany(Group::class,'groups_users');
    }
}
