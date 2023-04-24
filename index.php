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
                            <a href="#articles" class="header__link js-scroll">Articles</a>
                        </li>
                        <li class="header__item">
                            <a href="#locations" class="header__link js-scroll">Locations</a>
                        </li>
                        <li class="header__item">
                            <a href="#videos" class="header__link js-scroll">Videos</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link js-scroll btn-lg" href="php/cart.php">Cart</a>
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
        <section class="benefits">
            <div class="benefits__wrap">

                <div class="benefits__cards">
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/svg/church-ico.svg" alt="Welcome to Odigo!" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Welcome to Odigo!
                        </h3>
                        <p class="benefits__card-desc">
                            Jump off balcony, onto stranger's head. Chase ball of string hide when guests come over.
                        </p>
                        <a href="#!" class="benefits__card-more">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/svg/person-ico.svg" alt="Your Personal Japan Guide" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Your Personal Japan Guide
                        </h3>
                        <p class="benefits__card-desc">
                            Jump off balcony, onto stranger's head. Chase ball of string hide when guests come over.
                        </p>
                        <a href="#!" class="benefits__card-more">
                            LEARN MORE
                        </a>
                    </div>
                    <div class="benefits__card">
                        <div class="benefits__card-pic">
                            <img src="./img/svg/building-ico.svg" alt="Promoting Local Businesses" class="benefits__card-thumb">
                        </div>
                        <h3 class="benefits__card-title">
                            Promoting Local Businesses
                        </h3>
                        <p class="benefits__card-desc">
                            Jump off balcony, onto stranger's head. Chase ball of string hide when guests come over.
                        </p>
                        <a href="#!" class="benefits__card-more">
                            LEARN MORE
                        </a>
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
                            A progression of rare and beautiful ingredients where texture, flavour and harmony is paramount. Delve into the Quay dining experience with Peter Gilmore’s Menu and a thoughtfully curated Wine List by Head Sommelier, Wilem Powell.
                        </p>
                        <a href="menu.php" class="tour__more">READ MORE</a>
                    </div>
                </div>

                <div class="tours__tour tour">
                    <div class="tour__info">
                        <h3 class="tour__title">
                            PETER GILMORE
                        </h3>
                        <p class="tour__desc">
                            Peter’s appreciation of nature’s diversity and his endless experimentation in the kitchen and garden are the driving forces in his cooking. Peter leads the Quay team with a focus on excellence, innovation and hospitality.
                        </p>
                        <a href="#!" class="tour__more">READ MORE</a>
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
                            EVENTS
                        </h3>
                        <p class="tour__desc">
                            Celebrate at one of Australia’s most awarded restaurants, with panoramic views encompassing the Sydney Harbour Bridge and Sydney Opera House. From intimate dinner parties in the Private Dining Room, to long lunches in the spectacular Upper Tower, to large
                            cocktail events in The Green Room – Quay delivers an immersive dining experience with views like no other.
                        </p>
                        <a href="#!" class="tour__more">READ MORE</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Tours end -->

        <!-- Places start -->
        <section class="places">
            <div class="wrapper-full">
                <div class="places__caption">
                    <h2 class="places__title section-title">
                        Get inspired for your next trip
                    </h2>
                </div>

                <div class="places__cards">

                    <div class="places__card places__card_size_lg">
                        <img src="./img/AB5I5541_NikkiTo.jpg" alt="EASTER AT QUAY" class="places__card-pic places__card-pic_size_lg">
                        <h3 class="places__card-title">
                            EASTER AT QUAY
                        </h3>
                        <a href="#!" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_lg">
                        <img src="./img/AB5I6743_NikkiTo.jpg" alt="MOTHER’S DAY AT QUAY" class="places__card-pic places__card-pic_size_lg">
                        <h3 class="places__card-title">
                            MOTHER’S DAY AT QUAY
                        </h3>
                        <a href="#!" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_sm">
                        <img src="./img/Quay-BYO-Dust-Of.jpg" alt="DUST OFF YOUR BOTTLES" class="places__card-pic places__card-pic_size_sm">
                        <h3 class="places__card-title">
                            YOUR BOTTLES
                        </h3>
                        <a href="#!" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_sm">
                        <img src="./img/Untitled-design-18.png" alt="Niigata" class="places__card-pic places__card-pic_size_sm">
                        <h3 class="places__card-title">
                            VIVID AT QUAY
                        </h3>
                        <a href="#!" class="places__card-link"></a>
                    </div>

                    <div class="places__card places__card_size_sm">
                        <img src="./img/Quay-view.jpg" alt="NEWS" class="places__card-pic places__card-pic_size_sm">
                        <h3 class="places__card-title">
                            NEWS
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