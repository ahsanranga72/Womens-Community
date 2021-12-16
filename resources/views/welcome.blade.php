<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Design And Implementation of A Professional CV Maker</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .hero-image {
      background-image: url("home.jpg");
      background-color: #cccccc;
      height: 1000px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: Black;
      width: 50%;
    }
  </style>
</head>

<body class="wraper">
  <div class="hero-image">
    <div class="hero-text">
      <div class="wraper">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
          <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
          @else
          <a href="{{ route('login') }}" class="btn btn-block btn-success btn-lg">Log in</a>

          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn btn-block btn-success btn-lg">Register</a>
          @endif
          @endauth
        </div>
        @endif
        <div class="callout callout-info">
          <h1 style="font-size:50px"><b>Let's Be</b></h1>
          <h3>Strong Together</h3>
        </div>
      </div>
    </div>
  </div>
</body>

</html>