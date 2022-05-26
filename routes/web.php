<?php

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

Route::get('/', function () {
    $a = 1;
    $b= 2;
    phpinfo();
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test', function () {
   echo 'xin';
})->middleware(['auth'])->name('test');

require __DIR__.'/auth.php';

Route::get('/test-event', function () {
   event(new \App\Events\DemoEvent());
});

Route::get('/test-i', [App\Http\Controllers\UserController::class, 'TestI']);
