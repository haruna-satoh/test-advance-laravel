@extends('layouts.default')
<style>
    th {
        background-color: #289adc;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #ffffff;
    }

    td table {
        margin: 0 auto;
    }

    td {
        padding: 25px 40px;
        background-color: #eeeeee;
        text-align: center;
    }
    td table tbody tr td {
        background-color: #eeeeee !important;
    }
</style>
@section('title', 'author.index.blade.php')

@section('content')
<table>
    <tr>
        <th>Author</th>
        <th>Book</th>
    </tr>
    {{-- @foreach ($items as $item) --}}
    @foreach ($hasItems as $item)
    <tr>
        <td>
            {{$item->getDetail()}}
        </td>
        <td>
            {{-- $itemに関連するbookがあるか調べる --}}
            {{-- @if ($item->books != null) --}}
            {{-- <table width="100%"> --}}
            <table>
                @foreach ($item->books as $obj)
                <tr>
                    <td>{{ $obj->getTitle() }}</td>
                </tr>
                @endforeach
            </table>
            {{-- {{ $item->book->getTitle() }} --}}
            {{-- @endif --}}
        </td>
    </tr>
    @endforeach
</table>
<table>
    <tr>
        <th>Author</th>
    </tr>
    @foreach ($noItems as $item)
    <tr>
        <td>{{ $item->getDetail() }}</td>
    </tr>
    @endforeach
</table>
@endsection