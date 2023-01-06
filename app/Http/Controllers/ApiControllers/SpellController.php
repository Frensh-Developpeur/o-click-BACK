<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Spell;
use App\Models\User_has_spell;
use Illuminate\Http\Request;

class SpellController extends Controller
{
    public function list()
    {
        $spells = Spell::orderBy('price', 'asc')->get();
        return response()->json($spells);
    }

    public function read ($id) {
        $spell = Spell::find($id);

        if ($spell === null) {
            return response("le spell n'existe pas", 404);
        }

        return response()->json($spell);
    }

    public function createSpell (Request $request) {
        $user = auth()->user();
        $userId = $user->id;

        User_has_spell::create([
            'user_id'=>$userId,
            'spell_id'=>$request->spell_id
        ]);
    }

    public function allSpell () {
        $user = auth()->user();
        $userId = $user->id;

        $spell = User_has_spell::where('user_id', $userId)->get();

        return response()->json($spell);
    }

}
