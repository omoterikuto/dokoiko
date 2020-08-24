@extends('app')

@section('title', 'ログイン')

@section('content')
  <div class="container">
      <div class="">
        <h1 class=""><a class="" href="/">memo</a></h1>
        <div class="">
          <div class="">
            <h2 class="">ログイン</h2>
            @include('error')
            <div class="">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="">
                  <label for="email">メールアドレス</label>
                  <input class="" type="text" id="email" name="email" required value="{{ old('email') }}">
                </div>
                <div class="">
                  <label for="password">パスワード</label>
                  <input class="" type="password" id="password" name="password" required>
                </div>
                <input type="hidden" name="remember" id="remember" value="on">
                <div class="">
                  <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方</a>
                </div>
                <button class="" type="submit">ログイン</button>
              </form>
              <div class="">
                <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection