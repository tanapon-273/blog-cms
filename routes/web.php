<?php
use App\Http\Controllers\Blog\PostController;
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

Route::get('/','WelcomeController@index');
Route::get('blog/posts/{post}',[PostController::class],'show')->name('blog.show');

Auth::routes();
Route::middleware(['auth'])->group(function(){
	Route::resource('categories','CategoryController');
	Route::resource('posts','PostController');
	Route::resource('tags','TagsController');
});

Route::middleware(['auth','admin'])->group(function(){
	Route::get('users','Usercontroller@index')->name('users.index');
	Route::post('users/{user}/makeadmin','Usercontroller@makeadmin')->name('user.makeadmin');
});
Route::get('/home', 'HomeController@index')->name('home');
