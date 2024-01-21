<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>OperettaHarmony - Bejelentkezés</title>


  <link rel="stylesheet" href="{{ asset('/css/signin.css') }}">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  @include('menu')
  <div class="content-container">

    <form class="form-signin" method="POST" action="/login">
      <h2 class="form-signin-heading">Belépés</h2>
      <label for="userName" class="sr-only">Felhasználónév</label>
      <input type="text" name="userName" id="userName" class="form-control" placeholder="Add meg felhasználóneved"
        required autofocus>
      <label for="inputPassword" class="sr-only">Jelszó</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Add meg a jelszavad"
        required>
      <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">


      <button class="btn btn-lg btn-primary btn-block" type="submit">Belépek</button>
    </form>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>