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
        Route::get('/settings', 'SettingController@index')->name('settings');
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('category');
        Route::get('/list', 'CategoryController@list')->name('list');
        Route::post('/add', 'CategoryController@create')->name('add');
        Route::get('/edit/{id}', 'CategoryController@update')->name('edit');
        Route::get('/delete/{id}', 'CategoryController@destroy')->name('delete');
      });
    Route::prefix('sub-category')->name('sub-category.')->group(function () {
        Route::get('/', 'SubCategoryController@index')->name('sub-category');
        Route::get('/list', 'SubCategoryController@list')->name('list');
        Route::post('/add', 'SubCategoryController@create')->name('add');
        Route::get('/edit/{id}', 'SubCategoryController@update')->name('edit');
        Route::get('/delete/{id}', 'SubCategoryController@destroy')->name('delete');
      });
    Route::prefix('topic')->name('topic.')->group(function () {
        Route::get('/', 'TopicContoller@index')->name('topic');
        Route::get('/list', 'TopicContoller@list')->name('list');
        Route::post('/add', 'TopicContoller@create')->name('add');
        Route::get('/edit/{id}', 'TopicContoller@update')->name('edit');
        Route::get('/delete/{id}', 'TopicContoller@destroy')->name('delete');
      });
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/', 'PostController@index')->name('post');
        Route::get('/list', 'PostController@list')->name('list');
        Route::post('/add', 'PostController@create')->name('add');
        Route::get('/edit/{id}', 'PostController@update')->name('edit');
        Route::get('/delete/{id}', 'PostController@destroy')->name('delete');
      });


});
