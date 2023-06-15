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
Auth::routes();
//Auth::routes(['register' => false]);

Route::get('/posts/{category}', 'HomeController@postsByCategory')->name('posts.category');
Route::get('/post/{post}', 'HomeController@post')->name('post');

Route::prefix('admin')->group(function () {
    Route::resource('/curriculum','Admin\CurriculumController');
    Route::resource('/encuestas','Admin\EncuestasController');
    Route::get('/encuestas/{id}/respuestas','Admin\EncuestasController@showResponse')->name('encuestas.response');
    Route::resource('/skills','Admin\SkillsController');
    Route::resource('/users','Admin\UsuariosController');
    Route::get('/generate-pdf/{id}', 'PDFController@generatePDFAdmin')->name('generatePDFAdmin');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::resource('/encuestas','User\EncuestasController');
    Route::resource('/curriculum','User\CurriculumController');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home');
Route::get('/hacer-mi-cv', 'HomeController@makeCV');
Route::get('/hacer-mi-cv-ciego', 'HomeController@makeBlindCV');
Route::post('/generate-pdf', 'PDFController@generatePDF')->name('generatePDF');
Route::get('/simulador-virtual', 'HomeController@testSimulator');
Route::get('/simulador-virtual/{slug}', 'HomeController@makeTest');
Route::post('/simulador-virtual/{slug}', 'HomeController@storeTest');