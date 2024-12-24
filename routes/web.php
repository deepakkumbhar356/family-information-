<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('family',[FamilyController::class, 'index'])->name('index');
Route::post('family',[FamilyController::class, 'create'])->name('create');
Route::get('get-cities/{stateId}', [FamilyController::class, 'getCities']);
