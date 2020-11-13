<?php

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

Route::get('/', 'HomeController@index');

Route::get('/pessoa/{key}', 'InfoController@show');
Route::get('/disciplina/{key}', 'CourseController@show');

// Embeds
Route::get('/embed/disciplina-historico/{key}', 'EmbedCourseController@show');
