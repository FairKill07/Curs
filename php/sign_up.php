<?php

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
