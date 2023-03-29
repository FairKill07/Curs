<?php

// Подключаемся к базе данных
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем, удалось ли подключиться
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Получаем данные из формы регистрации
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Хэшируем пароль
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Добавляем данные в базу данных
$sql = "INSERT INTO users (username, password, email, phone)
VALUES ('$username', '$hashed_password', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "Регистрация прошла успешно!";
} else {
    echo "Ошибка регистрации: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
