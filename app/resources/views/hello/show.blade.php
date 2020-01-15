@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    @if ($items != null)
        <table>
        @foreach ($items as $item)
        <tr>
            <th>Id:</th>
            <td>{{$item->id}}</td>
            <th>Name:</th>
            <td>{{$item->name}}</td>
        </tr>
        @endforeach
        </table>
    @endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection