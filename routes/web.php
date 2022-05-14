<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class , "index"])->middleware('auth');



// Pride

Route::get('/pride', [AdminController::class , "pride"]);
Route::post('/uploadpride', [AdminController::class , "uploadpride"]);
Route::get('/deletepride/{id}', [AdminController::class , "deletepride"]);
Route::get('/updatepride/{id}', [AdminController::class, 'updatepride' ]);
Route::post('/updatedpride/{id}', [AdminController::class, 'updatedpride' ]);























Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
