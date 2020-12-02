<?php
session_start();
if ($_SESSION['is_admin'] != 1 ) {
header("Location: lk.php");
}
$title = "Панель администратора";
require_once("components/header.php");
require_once("components/db.php");
$result = $mysqli->query("SELECT `id`,`login`,`name`, `lastname`, `birthday`, `is_admin`  FROM `users` WHERE 1");
for($users = []; $row = $result->fetch_assoc(); $users[] = $row);
?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="text-center">Панель администратора</h1>
      </div>
      <div class="col-6">
        <table border="1">
          <tr>
            <td>ID</td>
            <td>Login</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Дата рождения</td>
            <td>Админ?</td>
            <td>Управление</td>
          </tr>
          <?php foreach($users as $user): ?>
          <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['login']?></td>
            <td><?=$user['name']?></td>
            <td><?=$user['lastname']?></td>
            <td><?=$user['birthday']?></td>
            <td><?=$user['is_admin']?></td>
            <td><a  href="admin_obr.php?id=<?= $user['id'] ?>" class="btn btn-danger">Удалить</a></td>
          </tr>
        <?php endforeach ;?>
        </table>
      </div>
    </div>
  </div>
<?php
  require_once("components/footer.php");
?>