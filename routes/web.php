<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestNotificationController;
use App\Http\Controllers\RegisterNotificationController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');;
    // Route::get('/dashboard', function () {
    //     // return view('dashboard');
    // })->name('dashboard');
});

Route::get('/test/{id}',[RegisterController::class,'test'])->name('/test');
Route::view('register','Register.index');
Route::Post('/register',[SendEmailController::class,'index']);

Route::get('send-email', [SendEmailController::class, 'index']);

// Route::get('/send-notification',[TestNotificationController::class,'sendNotification']);

Route::get('/send-notify',[RegisterNotificationController::class,'notification']);
