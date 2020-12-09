<!DOCTYPE html>
<html lang=ru>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход в админ. панель</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="my-4 text-center">Докажи, что ты админ.</h1>
        <p class="my-4 text-center">Пароль и логин такой же, как и в ДЗ по этим формам.</p>
      </div>
      <div class="col-6">
        <form action="auth_obr.php" method="POST" class="auth-form">
        <p class="text-danger error-text"></p>
        <input type="text" class="form-control mb-2" placeholder="Введите логин" name="login">
        <input type="password" class="form-control mb-2" placeholder="Введите пароль" name="password">
        <input type="submit" value="Войти" class="btn btn-primary btn-block">
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body> 
</html>