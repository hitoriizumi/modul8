<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProjectController;

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
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/create', function () {
    return view('create');
});

Route::resource('products', ProductController::class);

Route::resource('forms', FormController::class);

Route::resource('projects', ProjectController::class);

Route::get('/template', function () {
    return view('template', ['title' => 'Halaman Template']);
});