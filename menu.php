<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Amazing places in Japan</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link href="./css/messeg.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">


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
                            <a href="#articles" class="header__link js-scroll">About</a>
                        </li>
                        <li class="header__item">
                            <a href="#locations" class="header__link js-scroll">Страви</a>
                        </li>
                        <li class="header__item">
                            <a href="#locations1" class="header__link js-scroll">Вина</a>
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
                <div class="toast__body">Товар додано</div>
                <button class="toast__close" type="button"></button>
            </div>
        </div>
        <!-- Mesg_info -->

        <!-- Top start -->
        <section class="top" id="locations">
            <div class="wrapper-full">
                <h2 class="top__title section-title">
                    Сьогодні найкращі страви на замовлення
                </h2>
                <div class="top__cards">
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/crunchy.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Crunchy Celery Apple Salad
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Яблучний салат з хрустким селера, легкий і освіжаючий салат з селери з хрусткими зеленими
                            яблуками, редькою, червоною цибулею, свіжою петрушкою і м'ятою, сушеними журавлинами і
                            соняшниковим насінням. Ідеальний спосіб використовувати селера, що залишився! </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="3">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Mango_Salad.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Spicy Thai Mango Salad
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Гострий тайський салат із манго зі свіжим манго, огірком, морквою та великою кількістю кінзи
                            – легкий та легкий салат, що ідеально підходить для літа! Веганський та безглютеновий
                            рецепт. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="4">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Mango_Chicken.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Mango Chicken Lettuce Wraps
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Ці рулетики з курячого салату з манго дуже прості в приготуванні та настільки смачні! Вони
                            легкі та корисні та ідеально підходять для обіду чи вечері. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="5">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Rainbow_Antipasto.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Rainbow Antipasto
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Цей салат з макаронів із закусками «Райдуги» — ідеальний спосіб використовувати інгредієнти
                            для закусок, що залишилися! Крім того, його легко приготувати, додати пікантний вінегрет з
                            італійськими травами і дуже смачний! </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="6">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Turmeric_Chicken.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Turmeric Chicken
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Ідеальна вечеря у будній день, ситна і досить корисна! </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="7">Замовити
                        </button>
                    </div>
                </div>


            </div>


        </section>
        <!-- Top end -->

        <!-- Tours start -->
        <div class="tours" id="articles">
            <div class="wrapper-full">

                <h2 class="top__title section-title">
                    Інформація для наших гостей
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
                            Набір рідкісних і красивих інгредієнтів, де текстура, смак та гармонія
                            головне. Пориньте в атмосферу ресторану ORIGAMI з меню Пітера Гілмора та
                            ретельно підібрана мапа вин від головного сомельє Вілема Пауелла.
                        </p>
                    </div>
                </div>

                <div class="tours__tour tour">
                    <div class="tour__info">
                        <h3 class="tour__title">
                            PETER GILMORE
                        </h3>
                        <p class="tour__desc">
                            Любов Пітера до різноманітності природи та її нескінченні експерименти на кухні
                            і сад є рушійною силою у його кулінарії. Пітер очолює команду ORIGAMI, приділяючи особливу
                            увагу
                            перевага, інновації та гостинність.
                        </p>
                    </div>
                    <div class="tour__pic tour__pic_mob-first">
                        <img src="./img/rest_ckook.jpg" alt="Featured Neighborhood: Kyoto’s Arashiyama"
                            class="tour__thumb">
                    </div>
                </div>
            </div>
        </div>
        <!-- Tours end -->

        <section class="top" id="locations1">
            <div class="wrapper-full">
                <h2 class="top__title section-title">
                    Сьогодні найвишуканіші вина
                </h2>
                <div class="top__cards">
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Romanée-Conti.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Romanée-Conti
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Одне з культових американських вин, Screaming Eagle, тримало першість у рейтингу найдорожчих
                            вин у світі протягом 18 років. а не продавати виноград іншим виноробням. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="8">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Screaming_Eagle.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Screaming Eagle
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Жеробоам (4,5-літрова пляшка) легендарного вінтажу Перемоги з літерою «V» на етикетці було
                            продано 1947 року на аукціоні Christie's за $310 700. 1945-й вважають одним із найбільших
                            міліозимів у Бордо. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="9">Замовити
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Château_Mouton.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Château Mouton
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Пляшка (імперіал) одного з найбільших, як кажуть експерти, з коли-небудь зроблених бордо
                            була продана в 2010 році на аукціоні Christie's за $304 375. 1947 рік видався особливо
                            жарким, і вино з асамбляжу каберне франа і мірло досягло небачених. 4% алкоголю. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="10">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Heidsieck_Monopole.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Heidsieck Monopole
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Багато вина коштують надзвичайно дорого завдяки своїй рідкості та/або високій якості.
                            Шампанське Heidsieck Monopole 1907 року увійшло до списку найдорожчих вин світу через свою
                            унікальну історію. 1997 року 2000 пляшок було піднято з дна Балтійського моря, де вони
                            пролежали 81 рік. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="11">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Château_Lafite.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Château Lafite
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Шато Лафіт визнається професіоналами одним із найбільших вин світу. Особливо воно популярне
                            в Китаї. Не дивно, що три пляшки рідкісного 1869 були продані на аукціоні в Гонконгу за $230
                            000 кожна. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="12">Замовити
                        </button>
                    </div>
                    <div class="top__card">
                        <div class="top__card-pic">
                            <img src="./img/Penfolds_Block.jpg" alt="NAGOYA" class="top__card-thumb">
                            <div class="top__card-stats">
                                <h3 class="top__card-title">
                                    Penfolds Block
                                </h3>

                            </div>
                        </div>
                        <p class="top__card-desc">
                            Це унікальне вино від однієї з найстаріших і найвідоміших виноробень Австралії поміщене не у
                            звичайну пляшку, а в спеціальну ампулу, укладену у дерев'яний корпус. Щоб правильно її
                            розкрити, власнику не знадобиться штопор: до нього приїде сам винороб Penfolds та якісно
                            проведе операцію. </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="13">Замовити
                        </button>
                    </div>
                </div>


            </div>
        </section>


    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/main-es6.js"></script>
    <script src="./js/messeg.min.js"></script>

</body>