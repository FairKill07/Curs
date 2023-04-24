<form method="post" action="add_product.php">
    
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

<?php
// подключаемся к базе данных
$host = 'localhost';
$user = 'admin';
$password = 'admin';
$dbname = 'web_origami';

$link = mysqli_connect($host, $user, $password, $dbname);

$result = mysqli_query($link, "SELECT * FROM products");

// проверяем успешность выполнения запроса
if (!$result) {
    die('Ошибка выполнения запроса: ' . mysqli_error($link));
}

// отображаем результаты на странице
echo '<div>';
echo '<h2>Список продуктов:</h2>';
echo '<ul>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<li>'. "id( ". $row['id']. ' ) ' .'Path ('. $row['photo_path'] .') '. "Product ( ". $row['product_name'] ." )". ' (' . $row['dish_type'] . ') - ' . $row['price'] . ' $ ';
    echo '<a href="update.php?id=' . $row['id'] . '">Edit</a></li>';
}

echo '</ul>';
echo '</div>';

// закрываем соединение с базой данных
mysqli_close($link);
?>

<form method="post" action="deletCartdb.php">

    <label for="id">Id продукта:</label>
    <input type="text" id="id" name="id">

    <input type="submit" value="Удалить продукт">
</form>

