<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CardMember extends Model
{
    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
