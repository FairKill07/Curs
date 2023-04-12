<?php

// Устанавливаем параметры подключения к базе данных
$host = 'localhost';
$dbname = 'web_origami';
$user = 'admin';
$password = 'admin';

// Подключаемся к базе данных
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Ошибка подключения к базе данных: ' . $e->getMessage();
    exit();
}

