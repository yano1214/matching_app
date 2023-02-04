@extends('layouts.layout')

@section('content')
<div class='signinPage'>
    <div class='container'>
        <div class='userIcon'>
            <i class="fas fa-user fa-3x"></i>
        </div>
        <h2 class="title">ユーザーログイン</h2>
        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group @error('email')has-error @enderror">
                <label>メールアドレス</label>
                <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
                @error('email')
                <span class="errorMessage">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="form-group @error('password')has-error @enderror">
                <label>パスワード</label>
                <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
                @error('password')
                <span class="errorMessage">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group text-center">
                <button type="submit" class="loginBtn">ログイン</button>
            </div>
            <div class="linkToLogin">
                <a href="{{ route('register') }}">アカウント作成はこちら</a>
            </div>
<!-- ----------------------------パスワードリセット --------------->

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
<!-- ------------------------------------------------------------>
        </form>
    </div>
</div>
@endsection