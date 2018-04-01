<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subDetails extends Model
{
    protected $fillable = [
        'subject','user_id','is_Active','created_at', 'updated_at'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
