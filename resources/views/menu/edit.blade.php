@extends('app')

@section('title', 'メニュー編集')

@section('content')
<div class="container">
  <h1>メニュー編集</h1>
  <form method="post" action="{{ route('menu.update',['menu' => $menu]) }}" enctype="multipart/form-data">
    @csrf
    <div class="">
      <label>名前</label>
      <input type="text" name="name" class="" value="{{ $menu->name ?? old('name') }}">
    </div>
    <div>
      <label data-browse="ファイルを選択" class="">写真</label>
      <input type="file" class="" name="image">
    </div>
    <div>
      <label>説明文</label>
      <textarea name="text" rows="16">{{ $menu->text ?? old('text') }}</textarea>
    </div>
    <input type="submit" value="登録">
  </form>
</div>
@endsection