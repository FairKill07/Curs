<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cart.css">

    <title>Корзина</title>
</head>

<body>
    <!-- Header start -->
    <div class="wrapper_e"></div>
        <header class="header">
            <div class="wrapper">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="/" class="header__logo-link">
                            <img src="../img/ORIGAMIlogo.png" alt="Discover Amazing places in Japan"
                                class="header__logo-pic">
                        </a>
                    </div>

                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__item">
                                <a href="#articles" class="header__link js-scroll">Articles</a>
                            </li>
                            <li class="header__item">
                                <a href="#locations" class="header__link js-scroll">Locations</a>
                            </li>
                            <li class="header__item">
                                <a href="#videos" class="header__link js-scroll">Videos</a>
                            </li>
                            <?php
                            // проверяем, авторизован ли пользователь
                            session_start();
                            if (isset($_SESSION['username'])) {
                                // если да, показываем кнопку Log Out
                                echo '<li class="header__item"><a href="php/logout.php" class="header__link js-scroll">Log Out</a></li>';
                            } else {
                                // если нет, показываем кнопку Sign In
                                echo '<li class="header__item"><a href="sign.html" class="header__link js-scroll">Sign In</a></li>';
                            }
                            ?>
                        </ul>
                        <div class="header__nav-close">
                            <span class="header__nav-close-line"></span>
                            <span class="header__nav-close-line"></span>
                        </div>
                    </nav>
                    <div class="header__burger burger">
                        <span class="burger__line burger__line_first"></span>
                        <span class="burger__line burger__line_second"></span>
                        <span class="burger__line burger__line_third"></span>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header end -->

        <div class="shopping-cart">

            <div class="title">Shopping Bag</div>
            <?php
            if (!isset($_SESSION['cart'])): ?>

                

            <?php else: require_once 'db_add.php';
            error_reporting(0);?>


                <?php 
                $temp = $_SESSION['cart'];
                $productIds = array_keys($temp);
                $stmt = $db->prepare("SELECT * FROM products WHERE id IN (" . implode(',', $productIds) . ")");
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($temp as $id => $kol):
                    $product = array_filter($result, function($item) use ($id) {
                        return $item['id'] == $id;
                    }); ?>
                    <div class="item <?= $id ?>" id="<?= $id ?>">
                        <div class="buttons">
                            <button class="delete-btn btn-del" id="<?= $id ?>">X</button>
                        </div>
                        <div class="image img-cart">
                            <img src="../img/<?= $product[array_key_first($product)]['photo_path'] ?>" alt="" />
                        </div>

                        <div class="description">
                            <span><?= $product[array_key_first($product)]['product_name'] ?></span>
                            <span><?= $product[array_key_first($product)]['dish_type'] ?></span>
                            <span>Код товара :
                                <?= $id ?>
                            </span>
                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">+</button>
                            <input type="text" class="count-product" id="<?= $id ?>" name="name" value="<?= $kol ?>">
                            <button class="minus-btn" type="button" name="button">-</button>
                        </div>
                        <div class="total-price">$<?= $product[array_key_first($product)]['price'] ?></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/cart.js"></script>
</body>

</html>