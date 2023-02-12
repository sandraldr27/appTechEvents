<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

//R DEL CRUD//
Route::get('/',  [EventController::class, 'index'])->name('home');
Route::get('/home', [EventController::class, 'index']);

//D DEL CRUD//
Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('deleteEvent');

//C DEL CRUD//
Route::get('/create', [EventController::class, 'create'])->name('createEvent');
Route::post('/', [EventController::class, 'store'])->name('storeEvent');

//U DEL CRUD//
Route::get('/edit/{id}' , [EventController::class, 'edit']) ->name('editEvent');
Route::patch('/event/{id}', [EventController::class, 'update'])->name('updateEvent');

//SHOW//
Route::get('/show/{id}', [EventController::class, 'show'])->name('showEvent');

//[App\Http\Controllers\HomeController::class, 'index'])->name('home'); //