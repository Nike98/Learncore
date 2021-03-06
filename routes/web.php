<?php

use Illuminate\Support\Facades\Route;
use App\Thread;

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

Route::get('/home', function () {
    $threads = Thread::paginate(10);
    return view('home', compact('threads'));
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/thread', 'ThreadController');
