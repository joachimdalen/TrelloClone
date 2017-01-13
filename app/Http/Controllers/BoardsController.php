<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 14.01.2017
 * Time: 00.24
 */

namespace App\Http\Controllers;

use App\models\Board;
use Illuminate\Http\Request;

class BoardsController
{
    public function createBoard(Request $request)
    {
        $boardName = $request->input('name');
        $description = $request->input('description');
        $board = Board::create([
            'board_id'         => str_random(),
            'name'             => $boardName,
            'description'      => $description,
            'owner_or_team_id' => $request->user()->id,
            'color'            => '#0079bf'
        ]);

        return response()->json($board);
    }
    public function getBoardsShort(Request $request)
    {
        $boards = Board::select()->where('owner_or_team_id', $request->user()->id)->get();
        return response()->json($boards);
    }
}