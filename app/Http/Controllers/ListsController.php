<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 14.01.2017
 * Time: 13.45
 */

namespace App\Http\Controllers;


use App\models\BoardList;
use App\models\Card;
use Illuminate\Http\Request;

class ListsController
{
    public function createList(Request $request)
    {
        $board_id = $request->input('board_id');
        $title = $request->input('name');
        $list = BoardList::create([
            'list_id'  => str_random(),
            'board_id' => $board_id,
            'name'     => $title,
            'order'    => 1,
        ]);
        return response()->json($list);
    }

    public function getLists(Request $request, $board_id)
    {
        $lists = BoardList::select()
            //->where('owner_or_team_id', $request->user()->id)
            ->where('board_id', $board_id)
            ->where('is_archived', 0)->with('Cards')
            ->get();
        return response()->json($lists);
    }

    public function archiveList(Request $request)
    {

    }

}