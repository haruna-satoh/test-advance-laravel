{{-- layoutsディレクトリ内のdefault.blade.phpを継承 --}}
@extends('layouts.default')
<style>
    th {
        /* 背景色を#289ADCに指定 */
        background-color: #289ADC;
        /* 文字の色をwhiteに指定 */
        color: white;
        /* 外側の余白を上下5px,左右40pxに指定 */
        padding: 5px 40px;
    }
    /* 奇数行のデータのデザイン */
    tr:nth-child(odd) td {
        /* 背景色を#FFFFFFに指定 */
        background-color: #FFFFFF;
    }
    td {
        /* 外側の余白を上下25px,左右40pxに指定 */
        padding: 25px 40px;
        /* 背景色を#whiteに指定 */
        background-color: white;
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
        color: white
    }
</style>
{{-- 継承したファイルの<title>で表示される内容を指定 --}}
@section('title', 'edit.blade.php')

{{-- 継承したファイルの<content>で表示される内容を指定 --}}
@section('content')
@if (count($errors) > 0)
<p>入力に誤りがあります</p>
@endif
{{-- データ送信時、アクションを'/edit',メソッドを'post'に指定 --}}
<form action="/edit" method="post">
    {{-- フォーム送信時のセキュリティーの設定 --}}
    @csrf
    <table>
        @error('id')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>
                {{$errors->first('id')}}
            </td>
        </tr>
        @enderror
        <tr>
            {{-- テーブルの見出しをidに設定 --}}
            <th>
                id
            </th>
            {{-- inputタグを設定、$formの中のidの値をvalueに入れて表示する --}}
            <td>
                <input type="text" name="id" value="{{$form->id}}">
            </td>
        </tr>
        @error('name')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>
                {{$errors->first('name')}}
            </td>
        </tr>
        @enderror
        <tr>
            {{-- テーブルの見出しをnameに設定 --}}
            <th>
                name
            </th>
            <td>
                {{-- inputタグを設定、$formの中のnameの値をvalueに入れて表示する--}}
                <input type="text" name="name" value="{{$form->name}}">
            </td>
        </tr>
        @error('age')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>
                {{$errors->first('age')}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>
                age
            </th>
            <td>
                <input type="text" name="age" value="{{$form->age}}">
            </td>
        </tr>
        @error('nationality')
        <tr>
            <th style="background-color: red">ERROR</th>
            <td>
                {{$errors->first('nationality')}}
            </td>
        </tr>
        @enderror
        <tr>
            <th>
                nationality
            </th>
            <td>
                <input type="text" name="nationality" value="{{$form->nationality}}">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <button>送信</button>
            </td>
        </tr>
    </table>
</form>
@endsection