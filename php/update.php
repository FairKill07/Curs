<?php
// подключаемся к базе данных
$host = 'localhost';
$user = 'admin';
$password = 'admin';
$dbname = 'web_origami';

$link = mysqli_connect($host, $user, $password, $dbname);

$result = mysqli_query($link, "SELECT * FROM products");


// retrieve the details of the product being edited from the database using its ID
$id = $_GET['id'];
$result = mysqli_query($link, "SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

// display a form that allows the user to edit the product details
echo '<form method="post" action="upload.php">';
echo '<input type="hidden" name="id" value="'.$row['id'].'">';
echo '<label for="photo_path">Шлях до фотографії:</label>';
echo '<input type="text" id="photo_path" name="photo_path" value="'.$row['photo_path'].'">';
echo '<label for="product_name">Назва продукту:</label>';
echo '<input type="text" id="product_name" name="product_name" value="'.$row['product_name'].'">';
echo '<label for="dish_type">Тип страви:</label>';
echo '<input type="text" id="dish_type" name="dish_type" value="'.$row['dish_type'].'">';
echo '<label for="price">Ціна:</label>';
echo '<input type="text" id="price" name="price" value="'.$row['price'].'">';
echo '<input type="submit" value="Оновити">';
echo '</form>';

// in update_product.php

?>
