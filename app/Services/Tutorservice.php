<?php
namespace App\Services;
use App\User;
class Tutorservice {

    public function getActiveUsers()
    {
        $user_data= User::all();
        return $user_data;
    }
}
?>