@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/task/{{$task->id}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">
                        <span>タイトル</span>
                    </label>
                    <div>
                        <input id="title" class="form-control" type="text" name="title" value="{{$task->title}}">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="detail">
                        <span>詳細</span>
                    </label>
                    <div>
                        <textarea id="detail" class="form-control" name="detail" rows="10">{{$task->detail}}</textarea>
                        @error('detail')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">登録</button>
                <a href="/task" class="btn btn-primary">一覧に戻る</a>
            </form>
        </div>
    </div>
</div>
@endsection