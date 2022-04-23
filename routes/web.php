<?php

use App\Http\Controllers\Contact\CreateContactController;
use App\Http\Controllers\Contact\DeleteContactController;
use App\Http\Controllers\Contact\DetailContactController;
use App\Http\Controllers\Contact\EditContactController;
use App\Http\Controllers\Contact\ListContactController;
use App\Http\Controllers\Contact\UpdateContactController;
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

Route::get('/', ListContactController::class)->name('index');
Route::view('/create', 'contact')->name('contact.index');
Route::get('/detail/{id}', DetailContactController::class)->name('detail');
Route::delete('/delete/{id}', DeleteContactController::class)->name('delete.contact');
Route::post('/create', CreateContactController::class)->name('create.contact');
Route::get('/edit/{id}', UpdateContactController::class)->name('edit.contact');
Route::put('/edit/{id}', EditContactController::class)->name('update.contact');
