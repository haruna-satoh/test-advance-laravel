{{-- layoutsディレクトリ内のdefault.blade.phpを使う(継承) --}}
@extends('layouts.default')
<style>
    /* テーブルの見出しのデザイン */
    th {
        /* 背景色を#289ADCに指定 */
        background-color: #289ADC;
        /* 文字の色をwhiteに指定 */
        color: white;
        /* 外側の余白を上下5px,左右40pxに指定 */
        padding: 5px 40px;
    }
    /* テーブルのデータ(奇数行)のデザイン */
    tr:nth-child(odd) td {
        /* 背景色を#FFFFFFに指定 */
        background-color: #FFFFFF;
    }
    /* テーブルのデータ(全体)のデザイン */
    td {
        /* 外側の余白を上下25px,左右40pxに指定 */
        padding: 25px 40px;
        /* 背景色を#EEEEEEに指定 */
        background-color: #EEEEEE;
        /* 文字の位置をcenterに指定 */
        text-align: center;
    }
    /* 送信ボタンのデザイン */
    button {
        /* 外側の余白を上下10px,左右20pxに指定 */
        padding: 10px 20px;
        /* 背景色を#289ADCに指定 */
        background-color: #289ADC;
        /* 枠線をなくす */
        border: none;
        /* 文字の色をwhiteに指定 */
        color: white;
    }
</style>
{{-- layouts.defaultの<title>表示される内容を指定 --}}
@section('title', 'add.blade.php')

{{-- layouts.defaultの<content>に表示される内容を指定 --}}
@section('content')
{{--データを送信する時のメソッドをpostに指定--}}
<form action="" method="post">
    {{-- フォーム送信時のセキュリティの設定 --}}
    @csrf
    {{-- テーブルを作る --}}
    <table>
        {{-- テーブルのリスト --}}
        <tr>
            {{-- テーブルの見出し、nameを作成 --}}
            <th>name</th>
            {{-- inputタグを設定し、ユーザーのnameデータを受け取る --}}
            <td><input type="text" name="name"></td>
        </tr>
        {{-- テーブルのリスト --}}
        <tr>
            {{-- テーブルの見出し、ageを作成 --}}
            <th>age</th>
            {{-- inputタグを設定し、ユーザーのageデータを受け取る --}}
            <td><input type="text" name="age"></td>
        </tr>
        {{-- テーブルのリスト --}}
        <tr>
            {{-- テーブルの見出し、nationalityを作成 --}}
            <th>nationality</th>
            {{-- inputタグを設定し、ユーザーのnationalityデータを受け取る --}}
            <td><input type="text" name="nationality"></td>
        </tr>
        {{-- テーブルのリスト --}}
        <tr>
            {{-- テーブルの見出し --}}
            <th></th>
            {{-- 送信ボタンを作成 --}}
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
{{-- 'content'セクションの定義を終了 --}}
@endsection