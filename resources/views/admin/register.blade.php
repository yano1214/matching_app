@extends('layouts.layout')

@section('content')
<div class="signupPage">
    <header class="header">
        <div>アカウントを作成</div>
    </header>
    <div class='container'>

        <form class="form mt-5" method="POST" action="{{ url('admin/register') }}" enctype="multipart/form-data">

            @csrf


            </label>

            <div class="form-group @error('name')has-error @enderror">
                <label>名前</label>
                <input type="text" name="name" class="form-control" placeholder="名前を入力してください">
                @error('name')
                <span class="errorMessage">
                    {{ $message }}
                </span>
                @enderror

            </div>
            <div class="form-group @error('email')has-error @enderror">
                <label>メールアドレス</label>
                <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください">
                @error('email')
                <span class="errorMessage">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group @error('password')has-error @enderror">
                <label>パスワード</label>
                <em>6文字以上入力してください</em>
                <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
                @error('password')
                <span class="errorMessage">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>確認用パスワード</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="パスワードを再度入力してください">
            </div>

    </div>

    <div class="text-center">
<div class="start">
        <button type="submit" class="btn submitBtn">はじめる</button>
</div>
        <div class="linkToLogin">
            <a href="{{ url('admin/login') }}">ログインはこちら</a>
        </div>
    </div>
    </form>
</div>
</div>
@endsection





<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
