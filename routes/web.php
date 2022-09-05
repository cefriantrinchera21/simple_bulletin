<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::resource('article', ArticleController::class,['names'=>[
    'index'=>'article.index',   
    'create'=>'article.create',
    'edit'=>'article.edit',
    'store'=>'article.store',
    'show'=>'article.show',
],'only' => ['index', 'store','edit','create','show']]);

Route::post('/article/update',[ArticleController::class,'update_article']);
Route::get('/article/delete/{id}',[ArticleController::class,'delete_article'])->name('delete_article');