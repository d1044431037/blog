<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

// Route::get('hello', 'App\Http\Controllers\Sitecontroller@hello');

// Route::get('/users/{id}', 'App\Http\Controllers\UserController@show');

// Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
//     return "post $post , comments $comment";
// });

##Route::get('/game1', function (){
# return view('game1');
Route::get('index', 'App\Http\Controllers\SiteController@game');

Route::get('album', 'App\Http\Controllers\SiteController@album');

Route::get('demo', 'App\Http\Controllers\SiteController@demo');

//Route::resource('posts', 'App\Http\Controllers\PostController');
//Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');

Route::get('admin', 'App\Http\Controllers\SiteController@admin');

Route::get('paint',function(){
return view ('paint');
 }) ->name('mypaint');

Route::get('master', 'App\Http\Controllers\SiteController@master');
// Route::namespace ('App\Http\Controllers')->group(function (){
//     Route::get('/hello', 'SiteController@hello');
//     Route::get('/users/{id?}', 'UserController@show');
//     Route::get('admin', 'SiteController@dashboard');
//     Route::get('album', 'SiteController@gallery');
//     Route::get('album2','SiteController@gallery2');

Route::middleware(['auth'])->group(function(){

});
Route::resource('/posts','App\Http\Controllers\PostController');
//Route::post('/posts','App\Http\Controllers\PostController');

Route::get('/url',function(){
  //  return url ('paint');
  // return route('mypaint');
  // return action([SiteController::class,'admin']);
  return url()-> current();

});

Route::post('/post',function(Request $request){
  return $request->all();
});