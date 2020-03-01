<?php

// use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\Country;

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

// Route::get('/basicupdate', function() {
//     $post = Post::find(2);

//     $post->title = "New Eloquent title insert 2";
//     $post->content = 'Wow Eloquent is really 2';
//     $post->save();
// });

// Route::get('/create', function() {
//     Post::create(['title' => 'WOW create!!!!', 'content' => 'content !!!!!!']);
// });

// Route::get('/update', function() {
//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor Edwin']);
// });

// Route::get('/delete', function() {
//     $post = Post::find(1);
//     $post->delete();
// });

// Route::get('/delete2', function() {
//     Post::destroy(1);
//     Post::where('id_admin', 0)->delete();
// });

// // softDeletes有効の場合に以下のroutesにいくと、deleted_atが更新される。
// Route::get('/softdelete', function() {
//     Post::find(1)->delete();
// });
// // 論理削除したレコードを含む検索取得
// // withTrashed使わない場合、論理削除されたレコードは検索対象から外れる。
// Route::get('/readsoftdelete', function() {
//     $post = Post::withTrashed()->where('id', 1)->get();

//     return $post;
// });

// // 論理削除されたレコードのみ対象とする
// Route::get('/readsoftdelete2', function() {
//     $post = Post::onlyTrashed()->where('id', 1)->get();

//     return $post;
// });
// // deleted_atをnullに更新
// // 論理削除から復旧
// Route::get('/restore', function() {
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// // 論理削除されたレコードを物理削除
// Route::get('/forcedelete', function() {
//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });


// // 1:1
// // user -> postのtitle
// Route::get('/user/{id}/post', function($id) {
//     return User::find($id)->post->title;
// });

// Route::get('/post/{id}/user', function($id) {
//     return Post::find($id)->user->name;
// });

// // 1 : n
// Route::get('/posts', function() {
//     $user = User::find(1);

//     foreach($user->posts as $post) {
//         return $this->hasOne('App\Post');
//     }
// });

// // n : n
// Route::get('/user/{id}/role', function($id) {
//     $user = User::find($id)->orderBy('id', 'desc')->get();
//     return $user;
// });

Route::get('/user/pivot', function() {
    $user = User::find(1);

    foreach($user->roles as $role) {
        return $role->pivot->created_at;
    }
});

Route::get('/user/country', function() {
    $country = Country::find(1);

    foreach($country->posts as $post) {
        return $post->title;
    }
});
