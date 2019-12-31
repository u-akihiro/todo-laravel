@extends('layouts.app')

@section('content')
    <ul>
    @foreach ($tasks as $task)
        <li>{{$task->title}}</li>
    @endforeach
    </ul>
@endsection