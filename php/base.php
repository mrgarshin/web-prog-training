<?php
 header('Content-type: text/html; charset=utf-8');
 echo "Привет, <b> мир</b>!<br>";
 
 $name = "Василий";
 echo "Привет, " . $name . "!" . "<br>";
 //Интерполяция (вставка переменных внутрь строки). В php можно вставлять переменные в "двойные" ковычки.
 $name = "Сергей";
 echo "Привет, " . $name . "!" . "<br>";
 //Переменные, содержащие названия других переменных
 $user = "name";
 echo "С Вами снова ${$user}!" . "<br>";
 //Основные конструкции
 //Условия
 $speed = 90;
  if ($speed <= 80) {
      echo "Проезжайте" . "<br>";
  } else if ($speed > 80 && $speed < 120) {
      echo "Превышаете" . "<br>";
  } else {
      echo "Вас лишили прав!". "<br>";
  }
 
 //Циклы
 $i = 0;
 while($i < 5) {
     echo $i . "<br>";
     $i++;
 }
 echo "<hr>";
 $i = 0;
 do {
     echo $i . "<br>";
     $i++;
 } while ($i > 100);
 echo "<hr>";
 for($i = 0; $i < 5; $i++) {
     echo$i . "<br>";
 }
 echo "<hr>";
 //Функции
 echo sum(5, 3);
 
 function sum($a, $b = 1) {
     return $a + $b . "<br>";
 }
 if (true) {
     $somevar = 42;
 }
 echo $somevar . "<br>";
 
 $anothervar = 13;
 
 someFunc();
 function someFunc() {
     global $anothervar;
     echo $anothervar . "<br>";
 }
 echo "<hr>";
 //Массивы
 
 $fruits = ["Яблоко", "Банан", "Виноград", "Груша", "Апельсин"];
 echo $fruits[0] . "<br>";
 // Переборка с помощью цикла for
 echo "<hr>";
 for ( $i = 0; $i < count($fruits); $i++) {
     echo $fruits[$i] . ", "; 
 }
 echo "<hr>";
 
 foreach ($fruits as $fruit) {
     echo $fruit . ", "; 
 }
  echo "<hr>";
 //Ассоциативные массивы
 
 $user = ["name" => "Василий", "lastname" => "Петров", "role" => "admin"];
 echo $user['name'] . "<br>";
 foreach($user as $key => $value) {
     echo "<b>$key</b> : $value <br>";
 }
 echo "<hr>";
 // task 1
  $a = 15;
  $b = 6;
  echo $a / $b;
  echo "<hr>";
  //Task 2
  // Раскомментируй одну строчку, чтобы программа вывела на экран числа  12  и:  2  (сначала 12, а затем 2).
  $x = 2;
  $y = 12;
  //$y = x * y;
  //$y = x  y;
  $x = y - x;
  $y = y - x;
  echo $x.' <br >'.$y;
  echo "<hr>";
  //Task 3
  //Напиши программу, которая выводит на экран надпись: "Хочешь - решай задачи, не хочешь - решай нехотя" 17 раз каждый раз с новой строки, строки должны быть пронумерованы.
  for ($i = 0; $i < 17; $i++) {
      $str = "Хочешь - решай задачи, не хочешь - решай нехотя";
      echo $i + 1 . " Хочешь - решай задачи, не хочешь - решай нехотя <br>";
  }
  echo "<hr>";
  //Task 4
  //Напиши функцию, которая принимает в качестве параметра число, и возвращает квадрат этого числа.
  square(3);
  
  function square($num) {
      $num *= $num;
      echo $num;
  }
    echo "<hr>";
  //Task 5
    //Задание: 1) Напиши функцию, которая принимает 2 параметра и возвращает сумму этих чисел.
    //2) Вызовите функцию передав на вход два любых числа.
    //3) Выведите на экран результат работы функции.
    sumNumbers (4, 5);
    
    function sumNumbers($a, $b) {
        $a += $b;
        echo $a;
    }
   
?>