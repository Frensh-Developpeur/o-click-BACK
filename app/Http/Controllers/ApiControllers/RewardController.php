<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Save_game;
use App\Models\User;

class RewardController extends Controller
{
  
    public function listAllForState () {
        $save = Save_game::orderBy('monsters_id', 'desc', 'token', 'desc')->take(20)->get();
        return response()->json($save);
    }

    public function read ($id) {
        $user = User::find($id);

        if ($user === null) {
            return response("le joueur n'existe pas", 404);
        }

        return response()->json($user);
    }

}
