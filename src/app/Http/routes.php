<?php

// Route::get('/post/{id}', 'PostsController@index');
Route::resource('posts', 'PostsController');
Route::get('/contact', 'PostsController@contact');
Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "hi about page";
// });

// Route::get('/contact', function () {
//     return "hi contact page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "hi post page id is $id and name is $name";
// });

// // ルートに対してネームスペースを使用する例
// // 'as'=>'naming' でできる
// Route::get('/admin/posts/example', array('as'=>'admin.home', function() {
//     $url = route('admin.home');

//     return "this url is $url";
// }));


// Route::group(['middleware' => ['web']], function () {

// });
