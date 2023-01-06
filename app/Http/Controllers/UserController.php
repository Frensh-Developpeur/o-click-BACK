<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\Save_game;
use App\Models\Spell;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function list() {
        $users = User::orderBy('created_at', 'desc')->get();
    return view('users', ['users'=>$users]);
    }

    public function sort() {
        $users = User::offset(0)->limit(5)->orderBy('created_at', 'desc')->get();
        $spells = Spell::offset(0)->limit(5)->orderBy('created_at', 'desc')->get();
        $themes = Theme::offset(0)->limit(5)->orderBy('created_at', 'desc')->get();
        $monsters = Monster::offset(0)->limit(5)->orderBy('created_at', 'desc')->get();
        $saves = Save_game::offset(0)->limit(5)->orderBy('created_at', 'desc')->get();

        return view('home',
            [
            'users' => $users,
            'spells' => $spells,
            'themes' => $themes,
            'monsters' => $monsters,
            'saves' => $saves
            ]
        );
    }

    public function read ($id) {
        $user = User::find($id);

        if ($user === null) {
            return response("l'utilisateur n'existe pas", 404);
        }

        return View::make('usersUpdate', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'rank' => 'required'
        ]);
        $user = User::find($id);
        $user->rank = $request->get('rank');
        $user->save();
        return redirect('/office/users');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/office/users');
    }
}
