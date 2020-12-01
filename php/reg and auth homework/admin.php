<?php
  $title = "Панель администратора";
  require_once("components/header.php");
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
          </tr>
        </table>
      </div>
    </div>
  </div>
<?php
  require_once("components/footer.php");
?>