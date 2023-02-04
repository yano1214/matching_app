@extends('layouts.layout')

@section('content')
<div class="loginPage">
    <div class="loginPage_contents">
        <h1 class="h3 loginPage_contents_title">新しい出会いを見つけよう</h1>
        <div class="btn loginPage_contents_btn">
            <div class="contents_btn_box">
                <a class="text-white" href="{{ route('login') }}">ユーザーログイン</a>
            </div>
        </div>
        <div class="btn loginPage_contents_btn">
            <div class="contents_btn_box">
                <a class="text-white" href="{{ url('admin/login') }}">管理者ログイン</a>
            </div>
        </div>
    </div>
    @endsection
