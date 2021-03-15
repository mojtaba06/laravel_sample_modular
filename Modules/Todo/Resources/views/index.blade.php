@extends('todo::layouts.master')

@section('content')
<table>
    <tr>
        <td>id</td>
        <td>title</td>
    <tr>
        @foreach ($todos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->title}}</td>
    </tr>
    @endforeach
</table>

@endsection