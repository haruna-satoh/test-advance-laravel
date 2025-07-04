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