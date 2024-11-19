<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OtherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
// ongoning
Route::get('/admin/ongoing', [OtherController::class, 'ongoing'])->name('admin.ongoing');
