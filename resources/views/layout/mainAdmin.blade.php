<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <title>Hello, world!</title>
  </head>
  <body>
    {{-- menampilkan komponen navbar dengan include dari laravel --}}
    @include('komponen/header')
    @include('komponen/navbar')
    @yield('container')
    @include('komponen/footer')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>