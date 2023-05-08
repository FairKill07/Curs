<?php
require_once 'db_add.php';

// создание соединения с базой данных
$conn = mysqli_connect($host, $user, $password, $dbname);

// получение данных из формы
$photo_path = $_POST['photo_path'];
$dish_type = $_POST['dish_type'];
$price = $_POST['price'];
$product_name = $_POST['product_name'];

// подготовка и выполнение запроса на добавление данных в таблицу
$sql = "INSERT INTO products (photo_path,product_name, dish_type, price) VALUES ('$photo_path','$product_name', '$dish_type', '$price')";
if ($db->query($sql)) {
  echo "Страва добавленна";
} else {
  echo "Помилка: " . $sql . "<br>" . $db->errorInfo()[2];
}

// закрытие соединения с базой данных
mysqli_close($conn);
?>