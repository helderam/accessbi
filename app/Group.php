<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //

    public function users()
    {   
        return $this->belongsToMany(User::class);
    }

    public function reports()
    {   
        return $this->belongsToMany(Report::class);
    }
    
}
