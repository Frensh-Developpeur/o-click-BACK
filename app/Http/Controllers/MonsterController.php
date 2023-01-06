<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MonsterController extends Controller
{
    public function list() {
        $monsters = Monster::orderBy('created_at', 'desc')->get();
        return view('monsters', ['monsters'=>$monsters]);
    }

    public function create(Request $request){
        $monsters = new Monster();
        $monsters->name = $request->input('name');
        $monsters->life = $request->input('life');
        $monsters->status = $request->input('status');

        $monsters->save();
        return redirect('/office/monsters')->with('status');
    }

    public function read($id) {
        $monster = Monster::find($id);

        return View::make('monstersUpdate', compact('monster'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'life' => 'required',
            'status' => 'required',
        ]);
        $monster = Monster::find($id);
        $monster->name =  $request->get('name');
        $monster->life = $request->get('life');
        $monster->status = $request->get('status');
        $monster->save();
        return redirect('/office/monsters');
    }
}
