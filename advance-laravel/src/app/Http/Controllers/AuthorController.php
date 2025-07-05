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
        // Authorsのデータを全て$authorsに代入する
        $authors = Author::all();
        // indexと$authorsを表示する
        return view('index', ['authors' => $authors]);
    }
    // add関数を定義
    public function add()
    {
        // addを表示する
        return view('add');
    }
    // 追加されたデータを$requestに渡して、新しいリソースで処理する
    public function create(Request $request)
    {
        // $requestのデータを全て$formに代入する
        $form = $request->all();
        // $formのデータをAuthorに追加する
        Author::create($form);
        // データを送信した時、'/'を表示させる
        return redirect('/');
    }
    // データ編集用のページを表示させる
    public function edit(Request $request)
    {
        // Authorの中から、$request->idに一致するデータを探し$authorに入れる
        $author = Author::find($request->id);
        // editと$authorを表示する
        return view('edit', ['form' => $author]);
    }
    // 更新機能を追加
    public function update(Request $request)
    {
        // $requestのデータをすべて$formに入れる
        $form = $request->all();
        // bladeファイルで設定したcsrf対策用のトークンを削除する
        unset($form['_token']);
        // Authorの中から、$request->idに一致するデータを探し、$formを元に更新する
        Author::find($request->id)->update($form);
        // データを送信した時、'/'を表示させる
        return redirect('/');
    }
}
