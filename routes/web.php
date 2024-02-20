<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [KaryawanController::class, 'view'])->name('viewall');
Route::get('/adddata', [KaryawanController::class, 'viewcreateform'])->name('viewform');
Route::post('/datacreated', [KaryawanController::class, 'createdata'])->name('create');
Route::get('/updateData/{id}', [KaryawanController::class, 'updateform'])->name('updateform');
Route::patch('/updated/{id}', [KaryawanController::class, 'update'])->name('updated');
Route::delete('/delete/{id}', [KaryawanController::class, 'delete'])->name('delete');