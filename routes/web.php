<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('members')->group(function (){
    Route::get('register', [Controllers\membersController::class, 'register'] );
    Route::get('login', [Controllers\membersController::class, 'login']);
    Route::get('forgetPassword', [Controllers\membersController::class, 'forgetPassword']);
    Route::post('loggedIn', [Controllers\membersController::class, 'loggedIn']);
});

Route::prefix('db')->group(function (){
    Route::get('select', [Controllers\dbController::class, 'select']);
    Route::get('details/{id}',[Controllers\dbController::class, 'details']);
    Route::post('insert', [Controllers\dbController::class, 'insert']);
    Route::get('add', [Controllers\dbController::class, 'add']);
    Route::get('delete/{id}', [Controllers\dbController::class, 'delete']);
    Route::get('edit/{id}', [Controllers\dbController::class, 'edit']);
    Route::post('edit/{id}', [Controllers\dbController::class, 'update']);

});

Route::prefix('cache')->group(function (){
    Route::get('/', [Controllers\cacheController::class, 'sample']);
});

Route::prefix('mail')->group(function(){
    Route::get('/shipment', [Controllers\mailController::class, 'send']);
});












