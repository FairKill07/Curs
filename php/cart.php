<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
</head>

<body>
    <?php session_start();
    if (!isset($_SESSION['cart'])): ?>

        <h2>Ваша корзина пуста</h2>

    <?php else: ?>
        <table>
            <tr>
                <td>id</td>
                <td>количество</td>
                <td>Удалить</td>
            </tr>
            <?php $temp = $_SESSION['cart'];
            foreach ($temp as $id => $kol): ?>
                <tr id="<?= $id ?>">
                    <td>id товара:
                        <?= $id ?>
                    </td>
                    <td><input type="number" class="count-product" id="<?= $id ?>" value="<?= $kol ?>"></td>
                    <td><button class="btn btn-default btn-del" id="<?= $id ?>">Удалить</button></td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/cart.js"></script>
</body>

</html>