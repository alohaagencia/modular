<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <base href="{{ asset('/') }}">

  @if (! config('app.name'))
    <title>Login - Aloha Modular</title>
  @else
    <title>Login - {{ config('app.name') }}</title>
  @endif

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/login/styles/login.css">
</head>

<body>
  @yield ('content')

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
