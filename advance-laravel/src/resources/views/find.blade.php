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
    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
@section('title', 'find.blade.php')

@section('content')
<form action="find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="見つける">
</form>
{{-- $itemがセットされているか調べる --}}
@if (@isset($item))
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>nationality</th>
    </tr>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->nationality}}</td>
    </tr>
</table>
@endif
@endsection