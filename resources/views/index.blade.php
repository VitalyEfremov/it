<html>
<head>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".header").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 500);
            });
        });
    </script>
    <script type="text/javascript">
        function dropMenu() {
            display = document.getElementById('dropdown-menu').style.display;
            var body = document.body, html = document.documentElement;
            var height = Math.max( body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight );

            if (display == "none") {
                document.getElementById('main-content').style.display = "none";
                document.getElementById('dropdown-menu').style.height = height;
                document.getElementById('dropdown-menu').style.display = "block";
            } else {
                document.getElementById('dropdown-menu').style.display = "none";
                document.getElementById('main-content').style.display = "block";
            }
        }
    </script>
</head>
<body>
<div class="main-top-nav">
    <nav>
        <ul class="top-nav-bar">
            <li class="logo-icon">
                <a href="index.html"><img src="assets/imgs/logo_top.png"></a>
            </li>
            <li class="site-pages">
                <div><a href="#">О НАС</a></div>
                <div><a href="#">НАШИ ПРОДУКТЫ</a></div>
                <div><a href="#">НАШИ ДИСТРИБЬЮТЕРЫ</a></div>
                <div><a href="#">КАРЬЕРА В ЭЛАНКО</a></div>
                <div><a href="#">НАШИ КОНТАКТЫ</a></div>
            </li>
            <li id="top-right-icons">
                <div class="drop-menu-icon">
                    <a href="#" onclick="dropMenu()"><img src="assets/icons/dropdown-menu-icon.png"></a>
                </div>
                <div class="search-icon">
                    <a href="#"><img src="assets/icons/serach-icon.png"></a>
                </div>
            </li>
        </ul>
    </nav>
</div>
<div id="dropdown-menu" style="display: none;">
    <ul class="dropdown-menu-columns">
        <li><a class="title">О НАС</a></li>
        <li><a class="title">НАШИ ПРОДУКТЫ</a>
            <ul>
                <li><a href="#">ПТИЦЕВОДСТВА</a></li>
                <li><a href="#">СВИНОВОДСТВА</a></li>
                <li><a href="#">ЖИВОТНОВОДСТВА</a></li>
                <li><a href="#">СОБАК И КОШЕК</a></li>
            </ul>
        </li>
        <li><a class="title">НАШИ ДИСТРИБЬЮТЕРЫ</a></li>
        <li><a class="title">КАРЬЕРА В ЭЛАНКО</a></li>
        <li><a class="title">НАШИ КОНТАКТЫ</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
<div id="main-content">
    <div class="header">
        <div class="bg-image"></div>
        <div class="text-center">
            <div class="logo">
                <img src="assets/imgs/elanco__1_.svg">
            </div>
            <h1 class="h1-top">Обогащая жизнь</h1>
        </div>
        <div class="chevron-down-icon">
            <a href="#main"><img src="assets/icons/chevron-down-icon.png"></a>
        </div>
    </div>
    <div class="main-1-block" id="main">
        <div class="main-1-content">
            <div class="phrase">Эланко вдохновляет тех, кто выращивает и заботится о животных, на достижение амбициозных целей.</div>
            <div class="button">
                <a href="#">Узнайте больше об Эланко на глобальном сайте</a>
            </div>
        </div>
        <div class="main-1-buttons">
            <ul>
                <li><a href="#">НАШИ ПРОДУКТЫ</a></li>
                <li><a href="#">НАШИ ДИСТРИБЬЮТЕРЫ</a></li>
                <li><a href="#">КАРЬЕРА В ЭЛАНКО</a></li>
                <li><a href="#">НАШИ КОНТРАКТЫ</a></li>
            </ul>
        </div>
    </div>
    <div class="introduction">
        <p>
            Мы в Эланко понимаем, какую роль играет здоровье
            животных в улучшении качества жизни человека.
            Ведь питомцы – неотъемлемая часть нашей семьи, и
            наша задача сделать так, чтобы их жизнь была здоровой,
            качественной и как можно более долгой. А вместе с
            ростом населения Земли, растет и необходимость в
            поставках безопасной еды, доступной для всех.
            <br>
            <br>
            История Эланко началась с момента, когда в 1954 году
            компания Эли Лилли представила первый антибиотик
            ветеринарного назначения. И вот уже больше полувека
            Эланко работает над расширением возможностей наших
            клиентов – от ветеринарных врачей до производителей
            продуктов питания – всех тех, кого волнует здоровье
            животных. Мы стремимся разрабатывать и
            поставлять продукты, безопасные для потребителей,
            животных и окружающей среды. Наши исследования
            направлены на разработки, которые помогают
            предотвратить и вылечить болезни, и таким образом
            улучшить качество жизни животного и человека.
        </p>
    </div>
    <br>
    <br>
    <div class="blue-area-with-tablet">
        <div>
            <br>
            <br>
            <div class="tablet-image">
                <img src="assets/imgs/mission.png">
            </div>
            <div class="mission-and-vision">
                <span>Наша миссия:</span>
                <br>
                <br>
                <p>
                    Мы обеспечиваем тех, кто выращивает и
                    ухаживает за животными, комплексным набором
                    продуктов и услуг для поддержания здоровья
                    животных, помогая решать глобальные проблемы
                    разнообразного и меняющегося мира.
                </p>
                <br>
                <br>
                <span>
                                        Наше видение:
                                </span>
                <br>
                <br>
                <p>
                    Обогащение жизни через пищу и общение c
                    домашними животными.
                </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="info-columns">
        <div class="column">
            <a href="#"><img src="assets/imgs/info-dog-image.jpg"></a>
            <h3 class="info-header">
                Пусть ваш питомец будет здоровым с Мильбемакс®
            </h3>
            <p class="info-text">
                Если Ваш питомец выглядит здоровым,
                достаточно легко забыть о том, что его
                нужно обработать от гельминтов. Но эти
                паразиты окружают его повсюду, даже у Вас дома.
                Они несут угрозу здоровью не только Вашего
                питомца, но и здоровью членов Вашей семьи.
            </p>
            <p class="more-info-link">
                <a href="#">Узнать больше</a>
            </p>
        </div>
        <div class="column">
            <a href="#"><img src="assets/imgs/salmonela.png"></a>
            <h3 class="info-header">
                Сальмонелла360°
            </h3>
            <p class="info-text">
                Salmonella360.com – научная площадка,
                предназначенная улучшить управление инфекциями
                на производстве. Она предоставляет ветеринарным
                специалистам и производителям высокий уровень
                знаний и инструментов для прибыльного
                производства и безопасности пищевых продуктов.
            </p>
            <p class="more-info-link">
                <a href="#">Узнать больше</a>
            </p>
        </div>
        <div class="column">
            <a href="#"><img src="assets/imgs/info-logo.png"></a>
            <h3 class="info-header">
                Новости Эланко
            </h3>
            <p class="info-text">
                Каждый день в Эланко по всему миру происходит
                множество событий. Перейдите по ссылке, чтобы
                быть в курсе последних новостей.
            </p>
            <p class="more-info-link">
                <a href="#">Узнать больше</a>
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
    <footer>
        <div class="line-1">
            <div>
                <ul>
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Пользовательское соглашение</a></li>
                    <li><a href="#">Товарные знаки</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#">Свяжитесь с нами</a></li>
                    <li><a href="#">Эланко в мире</a></li>
                    <li><a href="index.html"><img></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="line-2">Copyright</div>
        <div class="clearfix"></div>
    </footer>
</div>
</body>
</html>
