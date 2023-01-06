<?php

namespace App\Http\Controllers;

use App\Models\Spell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SpellController extends Controller
{
    public function list() {
        $spells = Spell::all();
        return view('spells', ['spells'=>$spells]);
    }

    public function read($id) {
        $spell = Spell::find($id);

        return View::make('spellsUpdate', compact('spell'));
    }

    public function create(Request $request){
        $spells = new Spell();
        $spells->name = $request->input('name');
        $spells->description = $request->input('description');
        $spells->price = $request->input('price');
        $spells->status = $request->input('status');

        $spells->save();
        return redirect('/office/spells')->with('status');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);
        $spell = Spell::find($id);
        $spell->name =  $request->get('name');
        $spell->description = $request->get('description');
        $spell->price = $request->get('price');
        $spell->status = $request->get('status');
        $spell->save();
        return redirect('/office/spells');
    }
}
