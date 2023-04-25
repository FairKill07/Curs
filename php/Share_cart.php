<link rel="stylesheet" href="../css/cart.css">
<div class="shopping-cart">
    <div class="title">Shopping Bag</div>
    <?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        echo 'Please log in to see your shopping cart';
    } else {
        
        require_once 'db_add.php';

        $stmt = $db->prepare("SELECT session_data FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $sessionData = $stmt->fetchColumn();

        if (!$sessionData == NULL) {
            echo 'Your shopping cart is empty';
        } else {

            $temp = json_decode($sessionData, true);


            $productIds = array_keys($temp);
            $stmt = $db->prepare("SELECT * FROM products WHERE id IN (" . implode(',', $productIds) . ")");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            foreach ($temp as $id => $kol):
                $product = array_filter($result, function($item) use ($id) {
                    return $item['id'] == $id;
                }); ?>
                <div class="item <?= $id ?>" id="<?= $id ?>">
                    <div class="image img-cart">
                        <img src="../img/<?= $product[array_key_first($product)]['photo_path'] ?>" alt="" />
                    </div>
                    <div class="description">
                        <span><?= $product[array_key_first($product)]['product_name'] ?></span>
                        <span><?= $product[array_key_first($product)]['dish_type'] ?></span>
                        <span>Код товара : <?= $id ?></span>
                    </div>
                    <div class="quantity">
                        <input type="text" class="count-product" id="<?= $id ?>" name="name" value="<?= $kol ?>">
                    </div>
                    <div class="total-price">$<?= $product[array_key_first($product)]['price'] ?></div>
                </div>
            <?php endforeach; ?>
            <div class="title">
                <form method="post" action="sign_work.php">
                    <button class="top__card-more ">Купить</button>
                </form>
            </div>
        <?php }
    } ?>
</div>