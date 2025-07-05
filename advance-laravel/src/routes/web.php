<?php

use Illuminate\Support\Facades\Route;
// AuthorControllerを読み込む
use App\Http\Controllers\AuthorController;

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

/* Route::get('/', function () {
|    return view('welcome');
| });
*/

// '/'(トップページ)にアクセスした時、AuthorControllerのindexを呼び出す
Route::get('/',[AuthorController::class, 'index']);

// '/add'にアクセスした時、AuthorControllerのaddを呼び出す
Route::get('/add',[AuthorController::class, 'add']);

// '/add'にpostでアクセス時、AuthorControllerのcreateを呼び出す
Route::post('/add',[AuthorController::class, 'create']);

// '/edit'にgetでアクセス時、AuthorControllerのeditを呼び出す
Route::get('/edit',[AuthorController::class, 'edit']);

// '/edit'にpostでアクセス時、AuthorControllerのupdateを呼び出す
Route::post('/edit',[AuthorController::class, 'update']);