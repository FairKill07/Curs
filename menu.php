<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Amazing places in Japan</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./css/messeg.min.css" rel="stylesheet">

</head>

<body>
    <!-- Header start -->
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="index.php" class="header__logo-link">
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
        <section class="intro intro_img_nth" id="sign-in">
            <div class="wrapper">
                <h1 class="intro__title">
                    MENU
                </h1>
            </div>
        </section>
        <!-- Intro end -->

        <!-- Mesg_info -->
        <div class="top__cards">
            <div class="toast toast_message toast_default">
                <div class="toast__body">Сообщение...</div>
                <button class="toast__close" type="button"></button>
            </div>
        </div>
        <!-- Mesg_info -->

        <!-- Top start -->
        <section class="top" id="locations">
            <div class="wrapper-full">
                <h2 class="top__title section-title">
                    Today top places to visit
                </h2>
                <div class="top__card">
                    <div class="top__card-pic">
                        <img src="./img/top-pic-1-min.jpg" alt="NAGOYA" class="top__card-thumb">
                        <div class="top__card-stats">
                            <h3 class="top__card-title">
                                NAGOYA
                            </h3>

                        </div>
                    </div>
                    <p class="top__card-desc">
                        Jump off balcony, onto stranger's head. Chase ball of string hide when guests come over.
                        Being gorgeous with belly side up i could pee on this. Jump off balcony, onto stranger's
                        head. Chase ball of string hide when guests come over. Being gorgeous with
                        belly side up i could pee on this.
                    </p>
                    <button class="top__card-more btn popup btn-primary btn-buy " id="1">Купить
                    </button>
                </div>
            </div>

        </section>
        <!-- Top end -->

        <!-- Tours start -->
        <div class="tours" id="articles">
            <div class="wrapper-full">

                <h2 class="top__title section-title">
                    Today top places to visit
                </h2>

                <div class="tours__tour tour">
                    <div class="tour__pic">
                        <img src="img\Quay-Homepage-Menu-1.jpg" alt="Prefecture in Focus: Tottori" class="tour__thumb">
                    </div>
                    <div class="tour__info">
                        <h3 class="tour__title">
                            Menu
                        </h3>
                        <p class="tour__desc">
                            A progression of rare and beautiful ingredients where texture, flavour and harmony is
                            paramount. Delve into the Quay dining experience with Peter Gilmore’s Menu and a
                            thoughtfully curated Wine List by Head Sommelier, Wilem Powell.
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
                            Peter’s appreciation of nature’s diversity and his endless experimentation in the kitchen
                            and garden are the driving forces in his cooking. Peter leads the Quay team with a focus on
                            excellence, innovation and hospitality.
                        </p>
                        <a href="#!" class="tour__more">READ MORE</a>
                    </div>
                    <div class="tour__pic tour__pic_mob-first">
                        <img src="./img/rest_ckook.jpg" alt="Featured Neighborhood: Kyoto’s Arashiyama"
                            class="tour__thumb">
                    </div>
                </div>
            </div>
        </div>
        <!-- Tours end -->

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/main-es6.js"></script>
    <script src="./js/messeg.min.js"></script>

</body>