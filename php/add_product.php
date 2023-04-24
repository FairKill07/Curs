<?php
  // параметры подключения к базе данных
  $host = 'localhost';
  $user = 'admin';
  $password = 'admin';
  $dbname = 'web_origami';

  // создание соединения с базой данных
  $conn = mysqli_connect($host, $user, $password, $dbname);

  // проверка соединения
  if (!$conn) {
    die('Ошибка подключения к базе данных: ' . mysqli_connect_error());
  }

  // получение данных из формы
  $photo_path = $_POST['photo_path'];
  $dish_type = $_POST['dish_type'];
  $price = $_POST['price'];
  $product_name = $_POST['product_name'];

  // подготовка и выполнение запроса на добавление данных в таблицу
  $sql = "INSERT INTO products (photo_path,product_name, dish_type, price) VALUES ('$photo_path','$product_name', '$dish_type', '$price')";
  if (mysqli_query($conn, $sql)) {
    echo "Продукт успешно добавлен";
  } else {
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
  }

  // закрытие соединения с базой данных
  mysqli_close($conn);
?>