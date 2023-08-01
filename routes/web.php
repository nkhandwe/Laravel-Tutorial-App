<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', 'LoginController@index');
// Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', 'LoginController@dashboard')->name('dashboard');
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('category');
        Route::get('/list', 'CategoryController@list')->name('list');
        Route::post('/add', 'CategoryController@create')->name('add');
      });
    Route::prefix('sub-category')->name('sub-category.')->group(function () {
        Route::get('/', 'SubCategoryController@index')->name('sub-category');
        Route::get('/list', 'SubCategoryController@list')->name('list');
        Route::post('/add', 'SubCategoryController@create')->name('add');
      });


});
