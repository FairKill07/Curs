<?php
    session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'db_add.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Получаем данные пользователя из базы данных по его имени пользователя
    try {
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        // Если пользователь найден и пароль верен, то создаем сессию и перенаправляем на главную страницу
        if ($user && $user['password'] === $password) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: ../index.php');
            exit();
        } else {
            $error_message = 'Неправильно введено пароль.';
        }
    } catch (PDOException $e) {
        $error_message = 'Ошибка входа: ' . $e->getMessage();
    }
}

$db = null;
?>