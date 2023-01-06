<?php

namespace App\Http\Controllers;

use App\Models\Save_game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SaveController extends Controller
{
    public function list()
    {
        $users = User::all();
        $saves = Save_game::orderBy('created_at', 'desc')->get();
        return view('saves', ['saves'=>$saves, 'users'=>$users]);
    }

    public function read($id)
    {
        $save = Save_game::find($id);

        return View::make('savesUpdate', compact('save'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'token' => 'required',
            'monsters_id' => 'required',
            'monsters_life' => 'required',
        ]);
        $save = Save_game::find($id);
        $save->id = $request->input('id');
        $save->user_id = $request->input('user_id');
        $save->token = $request->input('token');
        $save->monsters_id = $request->input('monsters_id');
        $save->monsters_life = $request->input('monsters_life');
        $save->save();

        return redirect('/office/saves');
        }

    public function delete($id){
        $save = Save_game::findOrFail($id);
        $save->delete();
        return redirect('/office/saves');
    }
}