<?php

namespace App\Http\Controllers;

// Authorモデルを読み込む
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // index関数を定義
    public function index()
    {
        // $authorsのデータを全権取得する
        $authors = Author::all();
        // indexと$authorsを表示する
        return view('index', ['authors' => $authors]);
    }
}
