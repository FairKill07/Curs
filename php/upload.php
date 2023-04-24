<?php
$host = 'localhost';
$user = 'admin';
$password = 'admin';
$dbname = 'web_origami';

$link = mysqli_connect($host, $user, $password, $dbname);

$result = mysqli_query($link, "SELECT * FROM products");

$id = $_POST['id'];
$photo_path = $_POST['photo_path'];
$product_name = $_POST['product_name'];
$dish_type = $_POST['dish_type'];
$price = $_POST['price'];

// update the corresponding record in the database with the new values
mysqli_query($link, "UPDATE products SET photo_path='$photo_path', product_name='$product_name', dish_type='$dish_type', price='$price' WHERE id='$id'");

// redirect the user back to the main page
header("Location: addCartdb.php");

?>