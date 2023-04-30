<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Amazing places in Japan</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- Header start -->
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img src="img/ORIGAMIlogo.png" alt="Discover Amazing places in Japan" class="header__logo-pic">
                    </a>
                </div>

                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="#articles" class="header__link js-scroll">About</a>
                        </li>
                        <li class="header__item">
                            <a href="#locations" class="header__link js-scroll">Надихніться</a>
                        </li>
                        <li class="header__item">
                            <a href="menu.php" class="header__link js-scroll">Меню</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link js-scroll btn-lg" href="php/cart.php">Кошик</a>
                        </li>
                        <?php
                        // проверяем, авторизован ли пользователь
                        session_start();
                        if (isset($_SESSION['username'])) {
                            // если да, показываем кнопку Log Out
                            echo '<li class="header__item"><a href="php/logout.php" class="header__link js-scroll">Log Out</a></li>';
                        } else {
                            // если нет, показываем кнопку Sign In
                            echo '<li class="header__item"><a href="sign.html" class="header__link js-scroll">Увійти</a></li>';
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



    <main class="main">

        <!-- Intro start -->
        <section class="intro" id="sign-in">
            <div class="wrapper">
                <h1 class="intro__title">
                    ORIGAMI
                </h1>
            </div>
        </section>
        <!-- Intro end -->

        <!-- Benefits start -->
        <section class="benefits" id="INTRESTING">
            <div class="benefits__wrap">

                <div class="benefits__cards">
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/svg/church-ico.svg" alt="Welcome to Odigo!" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Ласкаво просимо до Origami
                        </h3>
                        <p class="benefits__card-desc">
                            Один із найвишуканіших та престижних ресторанів міста Харків
                        </p>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/svg/person-ico.svg" alt="Your Personal Japan Guide" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Обслуговування в Origami
                        </h3>
                        <p class="benefits__card-desc">
                            Швидкий відгук та обслуговування наших гостей та клієтів
                        </p>
                        
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/svg/building-ico.svg" alt="Promoting Local Businesses" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Мережа закладів Origami
                        </h3>
                        <p class="benefits__card-desc">
                            Відвудуйте наші ресторани не тільки в Харкові,а і в інших містах країни
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefits end -->

        <!-- Tours start -->
        <div class="tours" id="articles">
            <div class="wrapper-full">

                <div class="tours__tour tour">
                    <div class="tour__pic">
                        <img src="img\Quay-Homepage-Menu-1.jpg" alt="Prefecture in Focus: Tottori" class="tour__thumb">
                    </div>
                    <div class="tour__info">
                        <h3 class="tour__title">
                            Menu
                        </h3>
                        <p class="tour__desc">
                        Набір рідкісних і красивих інгредієнтів, де текстура, смак і гармонія є найважливішими. Зануртеся в ресторан Quay за допомогою меню Пітера Гілмора та ретельно підібраної винної карти від головного сомельє Вілема Пауелла.
                        </p>
                        <a href="menu.php" class="tour__more">ПЕРЕГЛЯНУТИ</a>
                    </div>
                </div>

                <div class="tours__tour tour">
                    <div class="tour__info">
                        <h3 class="tour__title">
                            Peter Gilmore
                        </h3>
                        <p class="tour__desc">
                            Peter’s appreciation of nature’s diversity and his endless experimentation in the kitchen and garden are the driving forces in his cooking. Peter leads the Quay team with a focus on excellence, innovation and hospitality.
                    </div>
                    <div class="tour__pic tour__pic_mob-first">
                        <img src="./img/rest_ckook.jpg" alt="Featured Neighborhood: Kyoto’s Arashiyama" class="tour__thumb">
                    </div>
                </div>

                <div class="tours__tour tour">
                    <div class="tour__pic">
                        <img src="./img/Quay-39.jpg" alt="Prefecture in Focus: Tottori" class="tour__thumb">
                    </div>
                    <div class="tour__info">
                        <h3 class="tour__title">
                            Events
                        </h3>
                        <p class="tour__desc">
                        Святкуйте в одному з найпрестижніших ресторанів Австралії з панорамним краєвидом на Сіднейський міст Харбор і Сіднейський оперний театр.
                        Коктейльні заходи в The Green Room – Origami створюють захоплюючі враження від обіду з неперевершеними краєвидами.

                    </div>
                </div>

            </div>
        </div>
        <!-- Tours end -->

        <!-- Places start -->
        <section class="places" id="locations">
            <div class="wrapper-full">
                <div class="places__caption">
                    <h2 class="places__title section-title">
                    Надихніться для наступного візиту
                    </h2>
                </div>

                <div class="places__cards">

                    <div class="places__card places__card_size_lg">
                        <img src="./img/AB5I5541_NikkiTo.jpg" alt="EASTER AT QUAY" class="places__card-pic places__card-pic_size_lg">
                        <h3 class="places__card-title">
                            МЕНЮ ORIGAMI
                        </h3>
                        <a href="menu.php#locations" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_lg">
                        <img src="./img/AB5I6743_NikkiTo.jpg" alt="MOTHER’S DAY AT QUAY" class="places__card-pic places__card-pic_size_lg">
                        <h3 class="places__card-title">
                        ORIGAMI INTRESTING
                        </h3>
                        <a href="#INTRESTING" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_sm">
                        <img src="./img/Quay-BYO-Dust-Of.jpg" alt="DUST OFF YOUR BOTTLES" class="places__card-pic places__card-pic_size_sm">
                        <h3 class="places__card-title">
                            КОЛЕКЦІЯ ВИН ORIGAMI
                        </h3>
                        <a href="menu.php#locations1" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_sm">
                        <img src="./img/Untitled-design-18.png" alt="Niigata" class="places__card-pic places__card-pic_size_sm">
                        <h3 class="places__card-title">
                        ЗАМОВЛЕННЯ
                        </h3>
                        <a href="php/Share_cart.php" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_sm">
                        <img src="./img/Quay-view.jpg" alt="NEWS" class="places__card-pic places__card-pic_size_sm">
                        <h3 class="places__card-title">
                        НОВИНИ
                        </h3>
                        <a href="#!" class="places__card-link"></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Places end -->



    </main>

    <footer class="footer">
        <div class="wrapper">
            <div class="footer__item">
                <div class="footer__logo">
                    <img src="img\ORIGAMIlogo.png" alt="Discover Amazing places in Japan" class="footer__logo-pic">
                </div>
                <nav class="footer__nav">
                    <ul class="footerm__menu">
                        <li class="footer__menu-item">
                            <h3 class="footer__menu-title">Company</h3>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">About</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Team</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">About</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Team</a>
                        </li>
                    </ul>
                    <ul class="footerm__menu">
                        <li class="footer__menu-item">
                            <h3 class="footer__menu-title">Locations</h3>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">About</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Team</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">About</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Team</a>
                        </li>
                    </ul>
                    <ul class="footerm__menu">
                        <li class="footer__menu-item">
                            <h3 class="footer__menu-title">Social Media</h3>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Facebook</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Team</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">About</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#!" class="footer__menu-link">Team</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <script src="./js/main-es6.js"></script>
</body>

</html>