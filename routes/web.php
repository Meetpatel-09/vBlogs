<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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

// Route::get('/{name}', function ($name) {
//     return view('welcome', ['name'=>$name]);
// });

// Route::get('/', function () {
//     return redirect('about');
// });

Route::get('/', function () {
    return view('welcome');
});

// Route::view('user', 'user');

// Route::get('user/{id}', [UserController::class, 'show']);

// Route::get('/user', function () {
//     return view('users');
// });

// Route::get('user/{user}', [UserController::class, 'loadView']);
// Route::get('user', [UserController::class, 'loadView']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', function () {
    return view('users');
});


Route::post('users', [UserController::class, 'getData']);