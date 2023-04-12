<?php

// Инициализируем сессию
session_start();

// Удаляем все переменные сессии
session_unset();

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу входа
header("Location: ../index.php");
exit;
