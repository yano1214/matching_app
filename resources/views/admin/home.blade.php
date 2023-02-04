@extends('layouts.layout')
@section('content')
<h2>ユーザー一覧</h2>
<div class="edit-warp">
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>画像</th>
        <th>プロフィール</th>
        <th>メールアドレス</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td class='edit_img'><img src="/storage/images/{{$user -> img_name}}"></td>
        <td>{{ $user->self_introduction }}</td>
        <td>{{ $user->email }}</td>
        <td>
<form method="post" action="{{ route('delete', $user) }}">
    @csrf
    <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか,?')">削除</button>
</form>



        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection
