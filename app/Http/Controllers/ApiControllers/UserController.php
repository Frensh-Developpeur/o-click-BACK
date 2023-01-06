<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Save_game;
use App\Models\User;
use App\Models\User_has_spell;
use App\Models\User_has_theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function read()
    {
        $user = auth()->user();

        if ($user === null) {
            return response("l'utilisateur n'existe pas", 404);
        }

        return response()->json($user);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validator = Validator::make($request->all(), [
            'name'=>'max:191',
            'email'=>'email|max:191|unique:users,email',
            'password'=>'min:8',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'validation_errors'=>$validator->messages(),
            ]);
        }else {
        if ($request->name) {
            User::where('id', $user->id)->update([
                'name' => $request->name,
            ]);
            return response()->json([
                'status' => 200,
                'valid' => 'Modification effectuée',
                'name'=> $request->name
            ]);
        }

        if ($request->email) {
            User::where('id', $user->id)->update([
                'email' => $request->email,
            ]);
            return response()->json([
                'status' => 200,
                'valid' => 'Modification effectuée',
                'email'=> $request->email
            ]);
        }
        if ($request->password) {
            User::where('id', $user->id)->update([
                'password' => Hash::make($request->password)
            ]);
        }
    }
}

    public function userDelete(Request $request)
    {
        $user = auth()->user();
        $userId = $user->id;

        Save_game::where('user_id', $userId)->delete();
        User_has_theme::where('user_id', $userId)->delete();
        User_has_spell::where('user_id', $userId)->delete();
        User::where('id', $userId)->delete();
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => 200,
            'delete' => 'Compte Supprimé'
        ]);
    }
}
