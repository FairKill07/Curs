<?php
session_start();

$session_data = json_encode($_SESSION['cart']);

// Подключение к базе данных
$host = 'localhost';
$dbname = 'web_origami';
$user = 'admin';
$password = 'admin';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Получаем id пользователя из сессии
    $user_id = $_SESSION['user_id'];

    // Выполняем SQL-запрос на обновление поля session_data для заданного пользователя
    $stmt = $db->prepare("UPDATE users SET session_data = :session_data WHERE id = :user_id");
    $stmt->bindParam(':session_data', $session_data);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    // Очищаем сессию
    unset($_SESSION['cart']);
    header('Location: ../menu.php');

} catch (PDOException $e) {
    echo 'Помилка базе данных: ' . $e->getMessage();
    exit();
}
?>





