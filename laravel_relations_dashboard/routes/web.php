<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    $datas = User::all();
    return view('pages.allUser',compact('datas'));
});



Route::resource('/articles',ArticleController::class);
Route::resource('/commentaires',CommentaireController::class);
Route::resource('/roles',RoleController::class);
Route::resource('/users',UserController::class);
