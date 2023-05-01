<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/cart.css">

<header class="header">
    <div class="wrapper">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="../menu.php" class="header__logo-link">
                    <img src="../img/ORIGAMIlogo.png" alt="Discover Amazing places in Japan" class="header__logo-pic">
                </a>
            </div>

            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="../index.php" class="header__link js-scroll">Головна</a>
                    </li>
                    <li class="header__item">
                        <a href="../menu.php" class="header__link js-scroll">Меню</a>
                    </li>
                    <?php
                        session_start();
                    if (isset($_SESSION['username'])) {
                        // если да, показываем кнопку Log Out
                        echo '<li class="header__item"><a href="../php/logout.php" class="header__link js-scroll">Вийти з кабінет</a></li>';
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
<div class="wrapper_e"></div>
<div class="shopping-cart">
    <div class="title">Shopping Bag</div>
    <?php
    if (!isset($_SESSION['user_id'])) {
        echo 'Please log in to see your shopping cart';
    } else {

        require_once 'db_add.php';

        $stmt = $db->prepare("SELECT session_data FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $sessionData = $stmt->fetchColumn();

        if (!$sessionData) {
            echo 'Your shopping cart is empty';
        } else {

            $temp = json_decode($sessionData, true);


            $productIds = array_keys($temp);
            $stmt = $db->prepare("SELECT * FROM products WHERE id IN (" . implode(',', $productIds) . ")");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            foreach ($temp as $id => $kol):
                $product = array_filter($result, function ($item) use ($id) {
                    return $item['id'] == $id;
                }); ?>
                <div class="item <?= $id ?>" id="<?= $id ?>">
                    <div class="image img-cart">
                        <img src="../img/<?= $product[array_key_first($product)]['photo_path'] ?>" alt="" />
                    </div>
                    <div class="description">
                        <span>
                            <?= $product[array_key_first($product)]['product_name'] ?>
                        </span>
                        <span>
                            <?= $product[array_key_first($product)]['dish_type'] ?>
                        </span>
                        <span>Код товара :
                            <?= $id ?>
                        </span>
                    </div>
                    <div class="quantity">
                        <input type="text" class="count-product" id="<?= $id ?>" name="name" value="<?= $kol ?>">
                    </div>
                    <div class="total-price">$
                        <?= $product[array_key_first($product)]['price'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php }
    } ?>
</div>