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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', function () {
    return view('create');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/gospel', function () {
    return view('gospel');
});

Route::resource('projects','ProjectsController');


Route::get('/skills', [
    'uses' => 'skillsFormController@createForm'
]);

// Post form data
Route::post('/skills', [
    'uses' => 'skillsFormController@ContactUsForm',
    'as' => 'skills.store'
]);
