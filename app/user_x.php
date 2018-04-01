<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_x extends Model
{
    protected $fillable = [
        'user_id', 'gender', 'age','address','location','city', 'state', 'pincode','qualification','subject','about',
        'exp', 'fees', 'language', 'time_slot','is_Active','created_at', 'updated_at','dob','skills','honour'
    ];

    public  function user()
    {
        return $this->belongsTo('App\User');
    }
}
