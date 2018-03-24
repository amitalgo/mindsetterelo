<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public function userRoles()
    {
        return $this->hasMany(userRoles::class);
    }

}
