{{-- layoutsディレクトリ内のdefault.blade.phpを継承 --}}
@extends('layouts.default')
<style>
    th {
        /* 背景色を#289ADCに指定 */
        background-color: #289ADC;
        /* 文字の色をwhiteに指定 */
        color: white;
        /* 外側の余白を上下5px,左右40pxを指定 */
        padding: 5px 40px;
    }
    /* 奇数行のテーブルデータのデザイン設定 */
    tr;:nth-child(odd) td {
        /* 背景色を#FFFFFFに指定 */
        background-color: #FFFFFF;
    }
    td {
        /* 外側の余白を上下25px,左右40pxに指定 */
        padding: 25px 40px;
        /* 背景色を#EEEEEEに指定 */
        background-color: #EEEEEE;
        /* 文字の位置をcenterに指定 */
        text-align: center;
    }
    button {
        /* 外側の余白を上下10px,左右20pxに指定 */
        padding: 10px 20px;
        /* 背景色を#289ADCに指定 */
        background-color: #289ADC;
        /* 枠線をnoneに指定して消す */
        border: none;
        /* 文字の色をwhiteに指定 */
        color: white;
    }
</style>
{{-- 継承したファイルの<title>で表示される内容を指定 --}}
@section('title', 'delete.blade.php')

{{-- 継承したファイルの<content>で表示される内容を指定 --}}
@section('content')
<table>
    <tr>
        <th>id</th>
        {{-- $authorの中のidの値を取り出す--}}
        <td>{{$author->id}}</td>
    </tr>
    <tr>
        <th>name</th>
        <td>{{$author->name}}</td>
    </tr>
    <tr>
        <th>age</th>
        <td>{{$author->age}}</td>
    </tr>
    <tr>
        <th>nationality</th>
        <td>{{$author->nationality}}</td>
    </tr>
    <tr>
        <th></th>
        <td>
            <form action="/delete" method="post">
            @csrf
            <button>送信</button>
            </form>
        </td>
    </tr>
</table>

@endsection