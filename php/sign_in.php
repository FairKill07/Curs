<?php

// Получаем данные из формы входа
$username = $_POST['username'];
$password = $_POST['password'];

// Получаем хэш пароля из базы данных для указанного пользователя
$sql = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row["password"];

    // Сравниваем хэш пароля из базы данных с введенным паролем
    if (password_verify($password, $hashed_password)) {
        echo "Вход выполнен успешно!";
    } else {
        echo "Неправильный логин или пароль.";
    }
} else {
    echo "Неправильный логин или пароль.";
}

mysqli_close($conn);

?>
