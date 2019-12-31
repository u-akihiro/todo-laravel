@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/task" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="title">
                        <span>タイトル</span>
                    </label>
                    <div>
                        <input id="title" class="form-control" type="text" name="title">
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
                        <textarea id="detail" class="form-control" name="detail" rows="10"></textarea>
                        @error('detail')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">登録</button>
            </form>
        </div>
    </div>
</div>
@endsection