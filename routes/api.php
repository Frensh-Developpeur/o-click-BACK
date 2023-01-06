<?php

use App\Http\Controllers\ApiControllers\SaveController;
use App\Http\Controllers\ApiControllers\LoginController;
use App\Http\Controllers\ApiControllers\SpellController;
use App\Http\Controllers\ApiControllers\UserController;
use App\Http\Controllers\ApiControllers\ThemeController;
use App\Http\Controllers\ApiControllers\MonsterController;
use App\Http\Controllers\ApiControllers\RewardController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('logout', [LoginController::class, 'logout']);
    Route::post('save', [LoginController::class, 'save']);
    Route::post('updateSave', [SaveController::class, 'updateSave']);
    Route::post('createTheme', [ThemeController::class, 'createTheme']);
    Route::post('createSpell', [SpellController::class, 'createSpell']);
    Route::get('allTheme', [ThemeController::class, 'allTheme']);
    Route::get('allSpell', [SpellController::class, 'allSpell']);
    Route::get('user', [UserController::class, 'read']);
    Route::post('user', [UserController::class, 'update']);
    Route::post('user/delete', [UserController::class, 'userDelete']);

});

Route::post('register', [LoginController::class, 'register']);

Route::post('login', [LoginController::class, 'login']);

Route::get('/users', [UserController::class, 'list']);


/*--------------- Route API Spells ---------------*/

Route::get('/spells', [SpellController::class, 'list']);

Route::get('spells/{id}', [SpellController::class, 'read']);


/*--------------- Route API Themes ---------------*/

Route::get('/themes', [ThemeController::class, 'list']);

Route::get('themes/{id}', [ThemeController::class, 'read']);


/*--------------- Route API Monsters ---------------*/

Route::get('/monsters', [MonsterController::class, 'list']);

Route::get('monsters/{id}', [MonsterController::class, 'read']);


/*--------------- Route API Classement ---------------*/

Route::get('/rewardSave', [RewardController::class, 'listAllForState']);

Route::get('/rewardUser/{id}', [RewardController::class, 'read']);