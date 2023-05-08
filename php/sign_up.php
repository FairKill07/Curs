<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'db_add.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Проверяем, что пользователь с таким же именем не существует в базе данных
    $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE username=:username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    if ($count > 0) {
        echo $error_message = "Такий юзер вже э";
    } else {
        // Добавляем пользователя в базу данных
        try {
            $stmt = $db->prepare("INSERT INTO users (username, password, email, phone) VALUES (:username, :password, :email, :phone)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);

            if ($stmt->execute()) {
                echo $error_message = "Успішно";
            } else {
                $error_message = "Помилка: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            $error_message = 'Помилка: ' . $e->getMessage();
        }
    }
}

$db = null;

?>