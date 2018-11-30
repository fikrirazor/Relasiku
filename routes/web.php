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

Route::get('/', function () 
{
    return View::make('pages.home');
});

Route::get('about', function()
{
	return View::make('pages.contact');
});
Route::get('pembelajaran', function()
{
	return View::make('pages.pembelajaran');
});
Route::get('bantuan', function()
{
	return View::make('pages.bantuan');
});
Route::get('bab1', function()
{
	return View::make('pages.bab1');
});
Route::get('bab2', function()
{
	return View::make('pages.bab2');
});
Route::get('bab3', function()
{
	return View::make('pages.bab3');
});
Route::get('tentangkami', function()
{
	return View::make('pages.tentangkami');
});
Route::get('quiz', function()
{
	return View::make('pages.quiz');
});
Route::get('100', function()
{
	return View::make('pages.100');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

