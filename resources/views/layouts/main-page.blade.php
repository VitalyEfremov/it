<html lang="en">
<head>
    <title>Main page</title>
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
                <a href="#"><img alt="Картинка" src="/public/assets/imgs/logo_top.png"></a>
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
                    <a href="#" onclick="dropMenu()"><img alt="Картинка" src="../../../public/assets/icons/dropdown-menu-icon.png"></a>
                </div>
                <div class="search-icon">
                    <a href="#"><img alt="Картинка" src="../../../public/assets/icons/serach-icon.png"></a>
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
    @yield('main-content')
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
                    <li><a href="#"><img alt="Картинка" ></a></li>
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
