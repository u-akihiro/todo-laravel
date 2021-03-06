@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($tasks as $task)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$task->title}}
                    </h5>
                    <p>
                        {!! nl2br(e($task->detail)) !!}
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="/task/{{$task->id}}" method="POST">
                            @csrf
                            @method('post')
                            <button class="btn btn-primary mr-2" type="submit">完了</button>
                        </form>
                    <a class="btn btn-primary mr-2" href="task/{{$task->id}}/edit" role="button">編集</a>
                        <form action="/task/{{$task->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">削除</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    登録日：{{$task->created_at}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection