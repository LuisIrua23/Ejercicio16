<?php
namespace App\Http\TeamController;

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('team/listar', [TeamController::class, 'listar'])->name('team.listar');
Route::get('team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('team/{team}/edit', [TeamController::class, 'edit'])->name('team.edit');
Route::get('team/{team}', [TeamController::class, 'show'])->name('team.show');
Route::put('team/{team}', [TeamController::class, 'update'])->name('team.update');
Route::delete('team/{team}', [TeamController::class, 'destroy'])->name('team.destroy');

