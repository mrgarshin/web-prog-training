<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Промисы</title>
    <style>
      .modal-container {
        display: none;
      }
      .modal-window {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 50%;
        z-index: 1000;
        opacity: 0;
        transition: all 1s ease;
      }
      .modal-dialog {
        box-shadow: 0 0 15px 0;
      }
      .modal-background {
        z-index: 100;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 0;
        background-color: rgba(0, 0, 0, .7);
        transition: all 1s ease;
      }
    </style>
  </head>
  <body class="p-3">
    <h2>Задание</h2>
    <button class="btn btn-primary open-modal-button">Показать модальное окно</button>
    <div class="modal-container">
      <div class="modal-background"></div>
      <div class="modal-window" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Промисы</h2>
              <button type="button" class="close close-times-button">
                &times;
              </button>
            </div>
            <div class="modal-body">
              <p>Запуск анимаций каскадом - одно из мест, где промисы применять крайне удобно.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary close-button">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="promises.js">
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>