<?php

// use Illuminate\Support\Facades\DB;
use App\Post;

/**
 * DATABASE Raw SQL Queries
 */
// Route::get('/insert', function() {
//     DB::insert('insert into posts(title, content) values(?, ?)',
//         ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
//             DB::insert('insert into posts(title, content) values(?, ?)',
//         ['PHP with CakePHP', 'CakePHP is the best thing that has happened to PHP']);
// });

// Route::get('/read', function () {
//     $results = DB::select('select * from posts where id=?', [1]);

//     return var_dump($results);
// });

// Route::get('/update', function() {
//     $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);
//     return $updated;
// });

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
// });

// Route::get('/post/{id}', 'PostsController@index');
// Route::resource('posts', 'PostsController');
// Route::get('/contact', 'PostsController@contact');
// Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

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

////////////////////////////////////
/**
 * ELOQUENT
 */

// Route::get('/find', function() {
//     $posts = Post::all();

//     foreach($posts as $post) {
//         return $post->title;
//     }
// });

// Route::get('/find', function() {
//     $post = Post::find(1);

//     return $post->title;
// });

// Route::get('/findwhere', function() {
//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore', function() {
//     // $posts = Post::findOrFail(2);

//     // return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();
// });

// Route::get('/basicinsert', function() {
//     $post = new Post;

//     $post->title = "New Eloquent title insert";
//     $post->content = 'Wow Eloquent is really';
//     $post->save();
// });

Route::get('/basicupdate', function() {
    $post = Post::find(2);

    $post->title = "New Eloquent title insert 2";
    $post->content = 'Wow Eloquent is really 2';
    $post->save();
});

