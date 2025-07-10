@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td {
        background-color: #ffffff;
    }
    td {
        padding: 25px 40px;
        background-color: #eeeeee;
        text-align: center
    }
</style>
@section('title', 'book.index.blade.php')

@section('content')
<table>
    <tr>
        <th>Books</th>
    </tr>
    {{-- $itemsの値を$itemに順番に入れる --}}
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->getTitle()}}
        </td>
    </tr>
    @endforeach
</table>
@endsection