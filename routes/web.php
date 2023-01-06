<?php

use App\Http\Controllers\MonsterController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*-------------------------- USERS -------------------------- */

Route::get('/office/home', [UserController::class, 'sort'])->middleware(['auth'])->name('home');

Route::get('/office/users', [UserController::class, 'list'])->middleware(['auth'])->name('home');

Route::get('/office/usersUpdate/{id}', [UserController::class, 'read']);

Route::put('/office/users/update/{id}', [UserController::class, 'update']);

Route::get('/office/users/delete/{id}', [UserController::class, 'delete']);

/*-------------------------- SPELLS -------------------------- */

Route::get('/office/spells', [SpellController::class, 'list'])->middleware(['auth'])->name('home');

Route::get('/office/spellsForm', function () {
    return view('spellsForm');
})->middleware(['auth'])->name('home');

Route::post('office/spellsForm', [SpellController::class, 'create']);

Route::get('/office/spellsUpdate/{id}', [SpellController::class, 'read']);

Route::get('/office/spellsForm/{id}', function(){
    return view('spellsForm');
});

Route::put('/office/spells/update/{id}', [SpellController::class, 'update']);

/*-------------------------- THEMES -------------------------- */

Route::get('/office/themes', [ThemeController::class, 'list'])->middleware(['auth'])->name('home');

Route::get('/office/themesForm', function () {
    return view('themesForm');
})->middleware(['auth'])->name('home');

Route::post('office/themesForm', [ThemeController::class, 'create']);

Route::get('/office/themesUpdate/{id}', [ThemeController::class, 'read']);

Route::put('/office/themes/update/{id}', [ThemeController::class, 'update']);

/*-------------------------- MONSTERS -------------------------- */

Route::get('/office/monsters', [MonsterController::class, 'list'])->middleware(['auth'])->name('home');

Route::get('/office/monstersForm', function () {
    return view('monstersForm');
})->middleware(['auth'])->name('home');

Route::post('office/monstersForm', [MonsterController::class, 'create']);

Route::get('/office/monstersUpdate/{id}', [MonsterController::class, 'read']);

Route::put('/office/monsters/update/{id}', [MonsterController::class, 'update']);

/*-------------------------- SAVES -------------------------- */

Route::get('/office/saves', [SaveController::class, 'list'])->middleware(['auth'])->name('home');

Route::get('/office/savesForm', function () {
    return view('savesForm');
})->middleware(['auth'])->name('home');

Route::get('/office/savesUpdate/{id}', [SaveController::class, 'read']);

Route::put('/office/saves/update/{id}', [SaveController::class, 'update']);

Route::get('/office/users/delete/{id}', [SaveController::class, 'delete']);


require __DIR__.'/auth.php';
