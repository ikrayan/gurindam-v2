<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


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
    return view('welcome', [
        "posts" => Post::all()
    ]);
});

Route::get('/postss', function () {
    return view('onePage/navbar');
});

Route::get('/post/{slug}', function ($slug) {
    $new_post = [];
    $posts = Post::all();

    foreach ($posts as $post) {
        if ($post["slug"] === $slug)
            $new_post = $post;
    }

    return view('onePage/post', [
        "post" => $new_post
    ]);
});


Route::get('/consult', function () {
    return view('onePage/mConsult');
});

Route::get('/dashboard', function () {
    return view('mDashboard');
});

Route::get('/login', 'LoginController@index');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
