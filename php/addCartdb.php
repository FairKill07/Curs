<?php
// Подключаемся к базе данных
require_once 'db_add.php';

// Обработка добавления нового продукта
if (isset($_POST['photo_path'], $_POST['product_name'], $_POST['dish_type'], $_POST['price'])) {
    $photoPath = $_POST['photo_path'];
    $productName = $_POST['product_name'];
    $dishType = $_POST['dish_type'];
    $price = $_POST['price'];

    $stmt = $db->prepare("INSERT INTO products (photo_path, product_name, dish_type, price) VALUES (?, ?, ?, ?)");
    if (!$stmt->execute([$photoPath, $productName, $dishType, $price])) {
        echo 'Ошибка при добавлении нового продукта: ' . $stmt->errorInfo()[2];
    }
}

// Обработка удаления продукта из базы данных
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $db->prepare("DELETE FROM products WHERE id = ?");
    if (!$stmt->execute([$id])) {
        echo 'Ошибка при удалении продукта: ' . $stmt->errorInfo()[2];
    }
}

// Получаем список продуктов из базы данных
$stmt = $db->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Форма добавления нового продукта -->
<form method="post" action="">

    <label for="photo_path">Путь к фотографии:</label>
    <input type="text" id="photo_path" name="photo_path">

    <label for="product_name">Название продукта:</label>
    <input type="text" id="product_name" name="product_name">

    <label for="dish_type">Тип блюда:</label>
    <input type="text" id="dish_type" name="dish_type">

    <label for="price">Цена:</label>
    <input type="text" id="price" name="price">

    <input type="submit" value="Добавить продукт">
</form>

<!-- Список продуктов из базы данных -->
<div>
    <h2>Список продуктов:</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>id(<?= $product['id'] ?>) Path (<?= $product['photo_path'] ?>) Product (<?= $product['product_name'] ?>) (<?= $product['dish_type'] ?>) - <?= $product['price'] ?> $
                <a href="update.php?id=<?= $product['id'] ?>">Редактировать</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Форма удаления продукта из базы данных -->
<form method="post" action="">
    <label for="id">Id продукта:</label>
    <input type="text" id="id" name="id">
    <input type="submit" value="Удалить продукт">
</form>
