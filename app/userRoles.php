<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userRoles extends Model
{
    public function user_id()
    {
        return $this->belongsTo(User::class);
    }

    public function role_id()
    {
        return $this->belongsTo(roles::class);
    }


}
