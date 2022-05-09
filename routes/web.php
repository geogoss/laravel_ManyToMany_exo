<?php

use App\Http\Controllers\TagController;
use App\Models\article;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

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

Route::get('/article', function () {
    $articles = article::all();
    $tags = Tag::all();
    return view('pages.afficheArticle', compact('articles', 'tags'));
});

Route::get('/show/{id}', [TagController::class, 'show']);


