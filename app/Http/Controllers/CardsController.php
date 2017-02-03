<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 14.01.2017
 * Time: 16.36
 */

namespace App\Http\Controllers;


use App\models\Card;
use Illuminate\Http\Request;

class CardsController
{
    public function createCard(Request $request)
    {
        $list_id = $request->input('list_id');
        $title = $request->input('name');
        $card = Card::create([
            'card_id'         => str_random(),
            'list_id'         => $list_id,
            'name'             => $title
        ]);
        return response()->json($card);
    }
}