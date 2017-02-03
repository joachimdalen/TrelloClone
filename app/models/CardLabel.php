<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CardLabel extends Model
{
    public function LabelInfo()
    {
       return $this->hasOne('App\models\BoardLabel', 'label_id', 'label_id');
        //return $this->belongsTo('App\models\BoardLabel');
    }
}
