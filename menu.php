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
                            <a href="#locations" class="header__link js-scroll">Dishes</a>
                        </li>
                        <li class="header__item">
                            <a href="#locations1" class="header__link js-scroll">Сarte</a>
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
                Today's best dishes to order
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
                        Яблочный салат с хрустящим сельдереем, легкий и освежающий салат из сельдерея с хрустящими зелеными яблоками, редисом, красным луком, свежей петрушкой и мятой, сушеной клюквой и семечками подсолнуха. Идеальный способ использовать оставшийся сельдерей!
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="3">Купить
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
                        Острый тайский салат из манго со свежим манго, огурцом, морковью и большим количеством кинзы — легкий и легкий салат, идеально подходящий для лета! Веганский и безглютеновый рецепт.
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="4">Купить
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
                        Эти рулетики из куриного салата с манго ОЧЕНЬ просты в приготовлении и НАСТОЛЬКО вкусны! Они легкие и полезные и идеально подходят для обеда или ужина.
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="5">Купить
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
                        Этот салат из макарон с закусками «Радуги» — идеальный способ использовать оставшиеся ингредиенты для закусок! Кроме того, его легко приготовить, добавить пикантный винегрет с итальянскими травами и он очень вкусный!
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="6">Купить
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
                        Идеальный ужин в будний день, сытный и довольно полезный!
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="7">Купить
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
                Information for our guests
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
                            Набор редких и красивых ингредиентов, где текстура, вкус и гармония
                            главное. Окунитесь в атмосферу ресторана ORIGAMI с меню Питера Гилмора и
                            тщательно подобранная карта вин от главного сомелье Вилема Пауэлла.
                        </p>
                    </div>
                </div>

                <div class="tours__tour tour">
                    <div class="tour__info">
                        <h3 class="tour__title">
                            PETER GILMORE
                        </h3>
                        <p class="tour__desc">
                            Любовь Питера к разнообразию природы и его бесконечные эксперименты на кухне
                            и сад являются движущей силой в его кулинарии. Питер возглавляет команду ORIGAMI, уделяя особое внимание
                            превосходство, инновации и гостеприимство.
                        </p>
                    </div>
                    <div class="tour__pic tour__pic_mob-first">
                        <img src="./img/rest_ckook.jpg" alt="Featured Neighborhood: Kyoto’s Arashiyama" class="tour__thumb">
                    </div>
                </div>
            </div>
        </div>
        <!-- Tours end -->

        <section class="top" id="locations1">
            <div class="wrapper-full">
                <h2 class="top__title section-title">
                Today's best dishes to order
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
                        Одно из культовых американских вин, Screaming Eagle, держало первенство в рейтинге самых дорогих вин в мире на протяжении 18 лет.Дело в том, что 1992 год – это первый винтаж, когда тогдашняя владелица хозяйства Джин Филипс решила самостоятельно разливать свой каберне совиньон по бутылкам, а не продавать виноград другим винодельням. 
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="8">Купить
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
                        Жеробоам (4,5-литровая бутылка) легендарного винтажа Победы с буквой «V» на этикетке была продана в 1947 году на аукционе Christie’s за $310 700. 1945-й считают одним из величайших миллезимов в Бордо.
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="9">Купить
                        </button>
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
                        Бутылка (империал) одного из величайших, как говорят эксперты, из когда-либо сделанных бордо была продана в 2010 году на аукционе Christie’s за $304 375. 1947 год выдался особенно жарким, и вино из ассамбляжа каберне франа и мерло достигло невиданных для той эпохи 14,4% алкоголя. 
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="10">Купить
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
                        Многие вина стоят баснословно дорого благодаря своей редкости и/или высокому качеству. Шампанское Heidsieck Monopole 1907 года вошло в список самых дорогих вин мира из-за своей уникальной истории. В 1997 году 2000 бутылок были подняты со дна Балтийского моря, где они пролежали 81 год.
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="11">Купить
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
                        Шато Лафит признается профессионалами одним из величайших вин мира. Особенно оно популярно в Китае. Неудивительно, что три бутылки редкого 1869 года были проданы на аукционе в Гонконге за $230 000 каждая.                        
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="12">Купить
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
                        Это уникальное вино от одной из старейших и известнейших виноделен Австралии помещено не в обычную бутылку, а в специальную ампулу, заключенную в деревянный корпус. Чтобы правильно ее вскрыть, обладателю не понадобится штопор: к нему приедет сам винодел Penfolds и качественно проведет операцию.
                        </p>
                        <button class="top__card-more btn popup btn-primary btn-buy " id="13">Купить
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