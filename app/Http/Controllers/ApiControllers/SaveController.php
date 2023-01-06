<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\Save_game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaveController extends Controller
{
  public function updateSave(Request $request) {
        $user = auth()->user();
        $userId = $user->id;

        Save_game::where('user_id', $userId)->update([
         'token'=> $request->token,
         'monsters_id'=> $request->monsters_id,
         'monsters_life'=>$request->monsters_life,
         'current_theme'=>$request->current_theme,
         'counteur'=>$request->counteur,
         'counteur_delete_life'=>$request->counteur_delete_life,
         'token_per_sec'=>$request->token_per_sec
        ]);

        return response()->json([
            'status'=>200,
            'valid'=> 'Modification effectuée'
        ]);
  }
}




// SCRIPT 


