<?php
// Підключення до бази даних
require_once 'db_add.php';

// Обробка додавання нового продукту
if (isset($_POST['photo_path'], $_POST['product_name'], $_POST['dish_type'], $_POST['price'])) {
    $photoPath = $_POST['photo_path'];
    $productName = $_POST['product_name'];
    $dishType = $_POST['dish_type'];
    $price = $_POST['price'];

    $stmt = $db->prepare("INSERT INTO products (photo_path, product_name, dish_type, price) VALUES (?, ?, ?, ?)");
    if (!$stmt->execute([$photoPath, $productName, $dishType, $price])) {
        echo 'Помилка при додаванні нового продукту: ' . $stmt->errorInfo()[2];
    }
}

// Обробка видалення продукту з бази даних
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $db->prepare("DELETE FROM products WHERE id = ?");
    if (!$stmt->execute([$id])) {
        echo 'Помилка при видаленні продукту: ' . $stmt->errorInfo()[2];
    }
}

// Отримуємо список продуктів з бази даних
$stmt = $db->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- Форма додавання нового продукту -->
<form method="post" action="">

    <label for="photo_path">Шлях до фотографії:</label>
    <input type="text" id="photo_path" name="photo_path">

    <label for="product_name">Назва продукту:</label>
    <input type="text" id="product_name" name="product_name">

    <label for="dish_type">Тип страви:</label>
    <input type="text" id="dish_type" name="dish_type">

    <label for="price">Ціна:</label>
    <input type="text" id="price" name="price">

    <input type="submit" value="Додати продукт">

</form>

<!-- Список продуктів з бази даних -->
<div>
    <h2>Список продуктів:</h2>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>id(<?= $product['id'] ?>) Шлях (<?= $product['photo_path'] ?>) Продукт (<?= $product['product_name'] ?>) (<?= $product['dish_type'] ?>) - <?= $product['price'] ?> $
                <a href="update.php?id=<?= $product['id'] ?>">Редагувати</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<!-- Форма видалення продукту з бази даних -->
<form method="post" action="">
    <label for="id">Id продукту:</label>
    <input type="text" id="id" name="id">
    <input type="submit" value="Видалити продукт">
</form>