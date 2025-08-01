<?php

use Illuminate\Support\Facades\Route;
// AuthorControllerを読み込む
use App\Http\Controllers\AuthorController;
// BookControllerの読み込み
use App\Http\Controllers\BookController;
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

// '/delete'にgetでアクセス時、AuthorControllerのdeleteを呼び出す
Route::get('/delete', [AuthorController::class, 'delete']);

// '/deleteにpostでアクセス時、AuthorControllerのremoveを呼び出す
Route::post('/delete',[AuthorController::class, 'remove']);

Route::get('/find', [AuthorController::class, 'find']);

Route::post('/find', [AuthorController::class, 'search']);

// '/author/{authorのid}にアクセスした時、AuthorControllerのbindを呼び出す
Route::get('/author/{author}',[AuthorController::class, 'bind']);

Route::get('/verror', [AuthorController::class, 'verror']);

// アクセスするURLの先頭に/bookをつける
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});

Route::get('/relation', [AuthorController::class, 'relate']);