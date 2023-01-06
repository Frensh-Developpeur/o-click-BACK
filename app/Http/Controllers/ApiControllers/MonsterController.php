<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Monster;

class MonsterController extends Controller
{
    public function list() {
        $monsters = Monster::all();
        return response()->json($monsters);
    }

    public function read ($id) {
        $monster = Monster::find($id);

        if ($monster === null) {
            return response("le monster n'existe pas", 404);
        }

        return response()->json($monster);
    }
}
