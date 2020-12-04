<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Posts;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

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

Route::middleware('auth')->group(function() {

Route::get('/create','PostController@create')->name('post.create');
Route::post('/store','PostController@store')->name('post.store');
Route::get('/myposts','PostController@myposts')->name('post.myposts');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




