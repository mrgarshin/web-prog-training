<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header("Location: auth.php");
  }
  $title = "Личный кабинет";
  require_once("components/header.php");
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <h1 class="text-center">Личный кабинет</h1>
    </div>
    <div class="col-6">
      <p>ID: <span><?= $_SESSION['id'] ?></span></p>
      <p>Login: <span><?= $_SESSION['login'] ?></span></p>
      <p>Имя: <span><?= $_SESSION['name'] ?></span></p>
      <form action="lk_obr.php" method="POST" class="border p-2">
        <p>Изменить имя</p>
        <input type="text" placeholder="Введите новое значение" name="name" value="<?= $_SESSION['name']?>">
        <input type="submit" class="btn btn-primary" value="Изменить">
      </form>
      <p>Фамилия: <span><?= $_SESSION['lastname'] ?></span></p>
      <form action="lk_obr.php" method="POST" class="border p-2">
        <p>Изменить фамилию</p>
        <input type="text" placeholder="Введите новое значение" name="lastname" value="<?= $_SESSION['lastname']?>">
        <input type="submit" class="btn btn-primary" value="Изменить">
      </form>
      <p>Дата рождения: <span><?= $_SESSION['birthday'] ?></span></p>
      <form action="lk_obr.php" method="POST" class="border p-2">
        <p>Изменить дату рождения</p>
        <input type="date" placeholder="Введите новое значение" name="birthday" value="<?= $_SESSION['birthday']?>">
        <input type="submit" class="btn btn-primary" value="Изменить">
      </form>
    </div>
  </div>
</div>

<?php
  require_once("components/footer.php");
?>