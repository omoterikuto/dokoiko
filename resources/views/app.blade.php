<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
  <div id="app">
    @include('error')
    @yield('content')
    @include('nav')
  </div>
  <script src="{{ mix('js/app.js') }}"></script> 
</body>

</html>