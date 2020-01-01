@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メールアドレスの認証</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <span>認証メールを再送信しました。</span>
                        </div>
                    @endif

                    <span>続行する前に、確認リンクについてメールを確認してください。メールが届かない場合は、</span>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">ここをクリックして認証メールを再送信してください。</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
