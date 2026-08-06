<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//method : GET, POST, PUT, DELETE, PATCH
// GET : lihat dan baca
// POST : mengirim data dari form, aksinya INSERT
// PUT : mengirim data dari form, aksinya UPDATE (data banyak)
// DELETE : mengirim data dari form, aksinya DELETE
// PATCH : mengirim data dari form, aksinya UPDATE (data cuma 1)

//GET
Route::get('salam', [\App\Http\Controllers\BelajarController::class, 'greeting']);
