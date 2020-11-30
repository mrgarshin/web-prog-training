<?php
  $title = "Регистрация";
  require_once("components/header.php");
  //include include_once require require_once
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1 class="my-4 text-center">Регистрация</h1>
        </div>
        <div class="col-6">
          <form action="reg_obr.php" method="POST">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Введите логин" name="login" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="password" class="form-control" placeholder="Введите пароль" name="password">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Введите имя" name="name">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Введите фамилию" name="lastname">
            </div>
            <p>Дата рождения</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="date" class="form-control" name="birthday">
            </div>
            <input type="submit" value="Зарегистрироваться" class="btn btn-primary btn-block">
          </form>
        </div>
      </div>
    </div>
<?php
  require_once("components/footer.php");
?>




