@extends('app')

@section('title', 'メニュー登録')

@section('content')
  <div class="container">
    <h1>メニュー登録</h1>
    <a href="{{ route('menu.create')}}">メニューを登録</a>
    @foreach ($menus as $menu)
    <div>
      <img src="/storage/menu/{{$menu->image}}" alt="" width="200px" height="200px">
      <h3>{{ $menu->name }}</h3>
      <p>{{ $menu->value }} 円</p>
      <p>{{ $menu->text }}</p>
      <a href="{{ route("menu.edit", ['menu' => $menu]) }}">編集</a>
      <form method="post" action="{{ route('menu.destroy',['menu' => $menu->id]) }}">
        @csrf 
        @method('DELETE')
        <input type="submit" value="削除">
      </form>
      </div>
    @endforeach
  </div>
@endsection