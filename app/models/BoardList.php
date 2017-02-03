<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BoardList extends Model
{
    protected $guarded = ['id'];

    public function Cards()
    {
        return $this->hasMany('App\models\Card', 'list_id', 'list_id')
            ->with('Labels')
            ->with('Attachments')
            ->with('Members');
    }
}
