<?php

namespace Garro;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('Garro\User');
    }
}
