@extends('app')

@section('title', '基本情報')

@section('content')
<div class="container config">
  <h1>基本情報</h1>
  <form method="POST" action="{{ route('config.store', ['user_id' => $user->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="config__item">
      <label for="name">店舗名
        <input id="name" type="text" name="name" value="{{ $user->name }}">
      </label>
    </div>
    <div class="config__item">
      <label for="email">メールアドレス
        <input id="email" type="text" name="email" value="{{ $user->email }}">
      </label>
    </div>
    <div class="config__item">
      <label for="address">住所
        <input id="address" type="text" name="address" value="{{ $user->address }}">
      </label>
    </div>
    <div class="config__item">
      <label for="phone">電話番号
        <input id="phone" type="text" name="phone" value="{{ $user->phone }}">
      </label>
    </div>
    <div class="config__item">
      <label for="close">定休日
        <input id="close" type="text" name="close" value="{{ $user->close }}">
      </label>
    </div>
    <div class="config__item">
      <label for="profile">プロフィール
        <textarea id="profile" name="profile">{{ $user->profile }}</textarea>
      </label>
    </div>
    <div class="config__item">
      <h3>支払い方法</h3>
      <label for="cash">現金
        <input id="cash" type="checkbox" name="cash" value="cash" {{ $user->cash == 'cash' ? 'checked' : '' }}>
      </label>
      <label for="credit">クレジット
        <input id="credit" type="checkbox" name="credit" value="credit" {{ $user->credit == 'credit' ? 'checked' : '' }}>
      </label>
      <label for="paypay">paypay
        <input id="paypay" type="checkbox" name="paypay" value="paypay" {{ $user->paypay == 'paypay' ? 'checked' : '' }}>
      </label>
    </div>
    <div class="config__item">
      <select name="category">
        <option value="chine" {{ $user->category == 'chine' ? 'selected' : '' }}>中華</option>
        <option value="cafe" {{ $user->category == 'cafe' ? 'selected' : '' }}>カフェ</option>
        <option value="ramen" {{ $user->category == 'ramen' ? 'selected' : '' }}>ラーメン</option>
        <option value="italian" {{ $user->category == 'italian' ? 'selected' : '' }}>イタリアン</option>
        <option value="japan" {{ $user->category == 'japan' ? 'selected' : '' }}>和食</option>
        <option value="family_restaurant" {{ $user->category == 'family_restaurant' ? 'selected' : '' }}>ファミレス</option>
        <option value="other" {{ $user->category == 'other' ? 'selected' : '' }}>その他</option>
      </select>
    </div>
    <div class="config__item">
      <label data-browse="ファイルを選択" class="">店舗写真
        <img src="/storage/user/{{$user->image}}" alt="" width="100px" height="100px">
        <input type="file" class="" name="image">
      </label>
    </div>
    <div class="config__item">
      <label for="password">パスワード
        <input id="password" type="text" name="password" value="{{ $user->password }}">
      </label>
    </div>
    <input type="submit" value="送信">
  </form>
</div>
@endsection