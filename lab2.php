<!DOCTYPE html>
<html>
<head>
  <title>Форма ввода студентов</title>
</head>
<body>
  <h1>Форма ввода студентов группы</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php
    //$num_students = mt_rand(5, 10); // генерация случайного числа студентов от 5 до 10
    for ($i = 1; $i <= 3; $i++) {
      echo "<h2>Студент $i</h2>";
      echo "<label for='num$i'>Номер зачетной книжки:</label>";
      echo "<input type='number' name='num[]' id='num$i' required>";
      echo "<br>";
      echo "<label for='surname$i'>Фамилия студента:</label>";
      echo "<input type='text' name='surname[]' id='surname$i' required>";
      echo "<br>";
      echo "<label for='name$i'>Имя студента:</label>";
      echo "<input type='text' name='name[]' id='name$i' required>";
      echo "<br>";
      echo "<label for='avg_mark$i'>Средний балл:</label>";
      echo "<input type='number' step='0.01' name='avg_mark[]' id='avg_mark$i' required>";
      echo "<br>";
    }
    ?>
    <input type="submit" name="submit" value="Отправить">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка данных, отправленных формой
    $num_arr = $_POST['num'];
    $surname_arr = $_POST['surname'];
    $name_arr = $_POST['name'];
    $avg_arr = $_POST['avg_mark'];

    // Вывод списка студентов
    echo "<h1>Исходный список студентов</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($num_arr); $i++) {
      echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
      echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
      echo "<li>Имя: " . $name_arr[$i] . "</li>";
      echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
      echo "<br>";
    }
    echo "</ul>";

    // Сортировка массива студентов по номеру зачетной книжки по возрастанию
    array_multisort($num_arr, SORT_ASC, $surname_arr, $name_arr, $avg_arr);

    // Вывод второго списка студентов отсортированных по номеру студента
    echo "<h1>Второй список студентов отсортированный по номеру зачетной книжки по возрастанию</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($num_arr); $i++) {
        echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
        echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
        echo "<li>Имя: " . $name_arr[$i] . "</li>";
        echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
        echo "<br>";
    }
    echo "</ul>";

    array_multisort($num_arr, SORT_DESC, $surname_arr, $name_arr, $avg_arr);

    // Вывод третьего списка студентов отсортированных по номеру студента по убыванию
    echo "<h1>Третий список студентов отсортированный по номеру зачетной книжки по убыванию</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($num_arr); $i++) {
        echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
        echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
        echo "<li>Имя: " . $name_arr[$i] . "</li>";
        echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
        echo "<br>";
    }
    echo "</ul>";

    array_multisort($surname_arr, SORT_ASC, $num_arr, $name_arr, $avg_arr);

    // Вывод третьего списка студентов отсортированных по фамилии от А до Я
    echo "<h1>Третий список студентов отсортированный по фамилии от А до Я</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($surname_arr); $i++) {
        echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
        echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
        echo "<li>Имя: " . $name_arr[$i] . "</li>";
        echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
        echo "<br>";
    }
    echo "</ul>";

    array_multisort($surname_arr, SORT_DESC, $num_arr, $name_arr, $avg_arr);

    // Вывод четвертого списка студентов отсортированных по фамилии от Я до А
    echo "<h1>Четвертый список студентов отсортированный по фамилии от Я до А</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($surname_arr); $i++) {
        echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
        echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
        echo "<li>Имя: " . $name_arr[$i] . "</li>";
        echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
        echo "<br>";
    }
    echo "</ul>";

    array_multisort($avg_arr, SORT_ASC, $num_arr, $surname_arr, $name_arr);

    // Вывод пятого списка студентов отсортированных по среднему баллу по возрастанию
    echo "<h1>Пятый список студентов отсортированных по среднему баллу по возрастанию</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($num_arr); $i++) {
        echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
        echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
        echo "<li>Имя: " . $name_arr[$i] . "</li>";
        echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
        echo "<br>";
    }
    echo "</ul>";

    array_multisort($avg_arr, SORT_DESC, $num_arr, $surname_arr, $name_arr);

    // Вывод шестого списка студентов отсортированных по среднему баллу по убыванию
    echo "<h1>Шестой список студентов отсортированных по среднему баллу по убыванию</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($num_arr); $i++) {
        echo "<li>Номер зачетной книжки: " . $num_arr[$i] . "</li>";
        echo "<li>Фамилия: " . $surname_arr[$i] . "</li>";
        echo "<li>Имя: " . $name_arr[$i] . "</li>";
        echo "<li>Средний балл: " . $avg_arr[$i] . "</li>";
        echo "<br>";
    }
    echo "</ul>";
  }
  ?>
</body>
</html>
