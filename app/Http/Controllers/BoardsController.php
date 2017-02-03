<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 14.01.2017
 * Time: 00.24
 */

namespace App\Http\Controllers;

use App\models\Board;
use App\models\BoardLabel;
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
        $boards = Board::select()
            ->where('owner_or_team_id', $request->user()->id)
            ->where('is_archived', 0)
            ->get();
        return response()->json($boards);
    }

    public function getBoard(Request $request, $board_id)
    {
        $board = Board::select()
            ->where('owner_or_team_id', $request->user()->id)
            ->where('board_id', $board_id)
            ->where('is_archived', 0)
            ->get();
        if ($board->count() == 0) {
            return view('partials.errors.board-not-found-error', ['board_id' => $board_id]);
        }
        return view('partials.board.board-base', ['board_id' => $board_id]);
    }

    public function getBoardLabels(Request $request)
    {
        $labels = BoardLabel::where('board_id', 'board_id')->get();
        return response()->json($labels);
    }
}