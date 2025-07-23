<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mhscontroller;
Route::get('/mhs-baru', [Mhscontroller::class, 'index'])->name('mhs-baru');
Route::get('/mhs-insert', [Mhscontroller::class, 'inputData'])->name('mhs-insert');
Route::post('/mhs-insert/store', [Mhscontroller::class, 'saveData'])->name('mhsinsert.store');
Route::get('/mhs-delete/{id}/delete',[Mhscontroller::class, 'mhsDelete'])->name('mhs-baru.delete');
Route::get('/mhs-edit/{id}/edit', [Mhscontroller::class, 'mhsEdit'])->name('mhs.edit');
Route::post('/mhs-update/{id}', [Mhscontroller::class, 'update'])->name('mhs.update');


Route::get('/', function () {
    return view('welcome');
});
