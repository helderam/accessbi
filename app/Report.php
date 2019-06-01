<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //

    public function groups()
    {   
        return $this->belongsToMany(Group::class);
    }
}
