<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ThemeController extends Controller
{
    public function list() {
        $themes = Theme::orderBy('created_at', 'desc')->get();
        return view('themes', ['themes'=>$themes]);
    }

    public function create(Request $request){
        $themes = new Theme();
        $themes->name = $request->input('name');
        $themes->price = $request->input('price');
        $themes->status = $request->input('status');

        $themes->save();
        return redirect('/office/themes')->with('status');
    }

    public function read($id) {
        $theme = Theme::find($id);

        return View::make('themesUpdate', compact('theme'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);
        $theme = Theme::find($id);
        $theme->name =  $request->get('name');
        $theme->price = $request->get('price');
        $theme->status = $request->get('status');
        $theme->save();
        return redirect('/office/themes');
    }
}
