<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\models\Card
 *
 * @mixin \Eloquent
 */
class Card extends Model
{
    protected $guarded = ['id'];

    //
    public function Attachments()
    {
        return $this->hasMany('App\models\CardAttachment', 'card_id', 'card_id');
    }

    public function Members()
    {
        return $this->hasMany('App\models\CardMember', 'card_id', 'card_id')->with('User');
    }

    public function Labels()
    {
        /* $labels = $this->hasMany('App\models\CardLabel', 'card_id', 'card_id');
         $boardLabel = array();
         foreach ($labels as $label) {
             $labelNew = array([
                 'label_id' => $label->label_id,
                 'color'    => $label->color
             ]);
             $labels[] = $labelNew;
         }
         /*return $labels->with('Labels')/* ->hasMany('App\models\Label', '', '')*/
        /*return $boardLabel;*/
        return $this->hasMany(CardLabel::class, 'card_id', 'card_id')->with('LabelInfo');
    }
}
