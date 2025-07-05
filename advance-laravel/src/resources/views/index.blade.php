{{-- layoutsディレクトリ内のdefault.blade.phpを継承 --}}
@extends('layouts.default')
<style>
    /* テーブル見出しのデザインを指定 */
    th {
        /* 背景色を#289ADCに指定 */
        background-color: #289ADC;
        /* 色をwhiteに指定 */
        color: white;
        /* 内側に上下5px,左右に40pxの余白を指定 */
        padding: 5px 40px;
    }
    /* 奇数行のテーブルデータのデザインを指定 */
    tr:nth-child(odd) td {
        /* 背景色を#FFFFFFに指定 */
        background-color: #FFFFFF;
    }
    /* 奇数行の直後にあるテーブルデータのデザインを指定 */
    td {
        /* 内側に上下25px,左右40pxの余白を指定 */
        padding: 25px 40px;
        /* 背景色を#EEEEEEに指定 */
        background-color: #EEEEEE;
        /* 文字の位置をcenterに指定 */
        text-align: center;
    }
</style>
{{-- index.blade.phpの内容を挿入 --}}
@section('title', 'index.blade.php')

{{-- 'content'セクションの内容の定義を始める --}}
@section('content')
{{-- テーブルを作成 --}}
<table>
    {{-- テーブルのリスト --}}
    <tr>
        {{-- テーブルの見出し、id作成 --}}
        <th>id</th>
        {{-- テーブルの見出し、name作成 --}}
        <th>name</th>
        {{-- テーブルの見出し、age作成 --}}
        <th>age</th>
        {{-- テーブルの見出し、nationality作成 --}}
        <th>nationality</th>
    </tr>
{{-- $authorに$authorsの値が順番に代入させて、要素の分だけ繰り返し処理する --}}
    @foreach ($authors as $author)
    {{-- テーブルのリスト --}}
    <tr>
        {{-- $authorにidの値を代入 --}}
        <td>{{$author->id}}</td>
        {{-- $authorにnameの値を代入 --}}
        <td>{{$author->name}}</td>
        {{-- $authorにageの値を代入 --}}
        <td>{{$author->age}}</td>
        {{-- $authorにnationalityの値を代入 --}}
        <td>{{$author->nationality}}</td>
    </tr>
    {{-- 繰り返し処理を終了 --}}
    @endforeach
</table>
{{-- 'content'セクションの定義を終了 --}}
@endsection