<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Scopes\PublishedScope;

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
    $posts = Post::all();
    $allposts = Post::withoutGlobalScope(PublishedScope::class)->get();

    return view('welcome', [
        'posts' => $posts,
        'allposts' => $allposts,
    ]);
});
