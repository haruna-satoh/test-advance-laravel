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
        // データ確認用の関数を追加
        // dd($authors);
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
        // dd($form);
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
        // dd($form);
        // bladeファイルで設定したcsrf対策用のトークンを削除する
        unset($form['_token']);
        // Authorの中から、$request->idに一致するデータを探し、$formを元に更新する
        Author::find($request->id)->update($form);
        // データを送信した時、'/'を表示させる
        return redirect('/');
    }
    // データを削除する機能を追加
    public function delete(Request $request)
    {
        // Authorの中から、$request->idに一致するデータを探し$authorに入れる
        $author = Author::find($request->id);
        // deleteと$authorを表示する
        return view('delete', ['author' => $author]);
    }
    // データの削除機能を追加
    public function remove(Request $request)
    {
        // Authorの中から、$request->idに一致するデータを探し削除する
        Author::find($request->id)->delete();
        // dd($request->all());
        // データを送信した時に、'/'を表示させる
        return redirect('/');
    }
    public function find()
    {
        // 'find'に'inputという空の文字列を渡す
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        // Authorの中でinputを含むものを検索し、最初の1件を$itemに入れる
        $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function bind(Author $author)
    {
        $data = [
            'item'=>$author,
        ];
        return view('author.binds',$data);
    }
}
