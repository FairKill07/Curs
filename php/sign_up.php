<?php
require_once 'db_add.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        echo $error_message = "Ошибка регистрации: пользователь с таким именем уже существует";
    } else {
        // Добавляем пользователя в базу данных
        try {
            $stmt = $db->prepare("INSERT INTO users (username, password, email, phone) VALUES (:username, :password, :email, :phone)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);

            if ($stmt->execute()) {
                header('Location: ../index.php');
                exit();
            } else {
                $error_message = "Ошибка регистрации: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            $error_message = 'Ошибка регистрации: ' . $e->getMessage();
        }
    }
}

$db = null;

?>