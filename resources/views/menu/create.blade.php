@extends('app')

@section('title', 'メニュー登録')

@section('content')
<div class="container">
  @include('error')
  <h1>メニュー登録</h1>
  <form action="{{ route('menu.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="">
      <label>名前</label>
      <input type="text" name="name" class="" value="">
    </div>
    <div class="">
      <label>金額</label>
      <input type="text" name="value" class="" value="">
    </div>
    <div>
      <label data-browse="ファイルを選択" class="">写真</label>
      <input type="file" class="" name="image">
    </div>
    <div>
      <label>説明文</label>
      <textarea name="text" rows="16">{{ $article->body ?? old('text ') }}</textarea>
    </div>
    <input type="submit" value="登録">
  </form>
</div>
@endsection