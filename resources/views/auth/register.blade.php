@extends('app')

@section('title', 'ユーザー登録')

@section('content')
  <div class="container">
    <div class="">
          <div class="">
            <h2 class="">ユーザー登録</h2>
            @include('error')
            <div class="">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="">
                  <label for="name">ユーザー名</label>
                  <input class="" type="text" id="name" name="name" required value="{{ old('name') }}">
                  <small>英数字3〜16文字(登録後の変更はできません)</small>
                </div>
                <div class="">
                  <label for="email">メールアドレス</label>
                  <input class="" type="text" id="email" name="email" required value="{{ old('email') }}" >
                </div>
                <div class="">
                  <label for="password">パスワード</label>
                  <input class="" type="password" id="password" name="password" required>
                </div>
                <div class="">
                  <label for="password_confirmation">パスワード(確認)</label>
                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button class="" type="submit">ユーザー登録</button>
              </form>
              <div class="">
                <a href="{{ route('login') }}" class="">ログインはこちら</a>
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection