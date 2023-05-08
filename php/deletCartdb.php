<?php
  // подключение к базе данных
  $host = 'localhost';
  $user = 'admin';
  $password = 'admin';
  $dbname = 'web_origami';

  $link = mysqli_connect($host, $user, $password, $dbname);

  // получение id строки, которую нужно удалить
  $id = $_POST['id'];

  // удаление строки из базы данных
  $sql = "DELETE FROM products WHERE id = $id";
  $result = mysqli_query($link, $sql);

  // проверка успешности удаления
  if ($result) {
    echo "Рядок з id $id успішно видалено з бази даних";
  } else {
    echo "Сталася помилка при видаленні рядка з id $id з бази даних";
  }
?>