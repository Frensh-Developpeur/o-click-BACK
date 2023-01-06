<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\User_has_theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function list() {

        $themes = Theme::orderBy('price', 'asc')->get();
        return response()->json($themes);
    }

    public function read ($id) {
        $theme = Theme::find($id);

        if ($theme === null) {
            return response("le theme n'existe pas", 404);
        }

        return response()->json($theme);
    }

    public function createTheme (Request $request) {
        $user = auth()->user();
        $userId = $user->id;

        User_has_theme::create([
            'user_id'=>$userId,
            'theme_id'=>$request->theme_id
        ]);
    }

    public function allTheme () {
        $user = auth()->user();
        $userId = $user->id;

        $theme = User_has_theme::where('user_id', $userId)->get();

        return response()->json($theme);
    }
}
