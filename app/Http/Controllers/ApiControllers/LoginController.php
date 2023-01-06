<?php

namespace App\Http\Controllers\ApiControllers;

use App\Models\User;
use App\Models\User_has_theme;
use App\Models\Monster;
use App\Models\Theme;
use App\Models\Save_game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191|unique:users,email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $token = $user->createToken($user->email . '_Token')->plainTextToken;

            $monster = Monster::find(1);
            $theme = Theme::find(1);

            $save = Save_game::create([
                'user_id' => $user->id,
                'monsters_id' => $monster->id,
                'monsters_life' => $monster->life,
                'token' => 0,
                'current_theme' => $theme->id,
                'counteur' => 0,
                'counteur_delete_life'=> 1,
                'token_per_sec' => 0,
            ]);

            $saveTheme = User_has_theme::create([
                'user_id' => $user->id,
                'theme_id' => $theme->id,
            ]);

            return response()->json([
                'status' => 200,
                'username' => $user->name,
                'token' => $token,
                'message' => 'Registered Successfully',
                'id' => $user->id,
                'save_create' => $save,
                'save_theme' => $saveTheme
            ]);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:191',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else {
            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 401,
                    'message' => 'Invalid Credentials',
                ]);
            } else {

                $role = '';
                $token = $user->createToken($user->email . '_Token', [''])->plainTextToken;

                return response()->json([
                    'status' => 200,
                    'username' => $user->name,
                    'token' => $token,
                    'message' => 'Logged In Successfully',
                    'role' => $role,
                ]);
            }
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Logged Out Successfully',
        ]);
    }

    public function save()
    {
        $user = auth()->user();
        $save = Save_game::where('user_id', $user->id)->first();

        return response()->json([
            'status' => 200,
            'save' => $save
        ]);
    }
}
