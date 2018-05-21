<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','Blog') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
      @yield('content')
      @include('layouts._footer')
    </div>
  </body>
</html>