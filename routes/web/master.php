<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

Auth::routes();

Route::get('/master', [MasterController::class, 'index'])->name('master.index');
Route::get('/Negeri', [MasterController::class, 'negeri'])->name('master.negeri');